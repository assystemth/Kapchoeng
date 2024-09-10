<?php
class Laws_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
        $this->load->model('laws_model');
    }

    public function add_topic()
    {
        // ดึงค่าจากฟอร์ม
        $laws_topic_topic = $this->input->post('laws_topic_topic');

        // ตรวจสอบว่ามีข้อมูลซ้ำหรือไม่
        $duplicate_check = $this->db->get_where('tbl_laws_topic', array('laws_topic_topic' => $laws_topic_topic));

        if ($duplicate_check->num_rows() > 0) {
            // ถ้ามีข้อมูลซ้ำ
            $this->session->set_flashdata('save_again', TRUE);
        } else {
            // ถ้าไม่มีข้อมูลซ้ำ, ทำการเพิ่มข้อมูล
            $data = array(
                'laws_topic_topic' => $laws_topic_topic,
                'laws_topic_by' => $this->session->userdata('m_fname'),
            );

            $query = $this->db->insert('tbl_laws_topic', $data);

            $this->space_model->update_server_current();

            if ($query) {
                $this->session->set_flashdata('save_success', TRUE);
            } else {
                echo "<script>";
                echo "alert('Error !');";
                echo "</script>";
            }
        }
    }

    public function list_all()
    {
        $this->db->order_by('laws_topic_id', 'DESC');
        $query = $this->db->get('tbl_laws_topic');
        return $query->result();
    }

    public function read($laws_topic_id)
    {
        $this->db->where('laws_topic_id', $laws_topic_id);
        $query = $this->db->get('tbl_laws_topic');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function edit_topic($laws_topic_id)
    {

        $data = array(
            'laws_topic_topic' => $this->input->post('laws_topic_topic'),
            'laws_date_topic' => $this->input->post('laws_topic_topic'),
            'laws_topic_by' => $this->session->userdata('m_fname'),
        );

        $this->db->where('laws_topic_id', $laws_topic_id);
        $query = $this->db->update('tbl_laws_topic', $data);

        $this->space_model->update_server_current();


        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล !');";
            echo "</script>";
        }
    }

    public function list_all_laws($laws_topic_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_laws');
        $this->db->join('tbl_laws_topic', 'tbl_laws.laws_ref_id = tbl_laws_topic.laws_topic_id');
        $this->db->where('tbl_laws.laws_ref_id', $laws_topic_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function add_laws()
    {
        // Check used space
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();

        // Calculate the total space required for all files
        $total_space_required = 0;
        if (!empty($_FILES['laws_pdf']['name'])) {
            $total_space_required += $_FILES['laws_pdf']['size'];
        }

        // Check if there's enough space
        if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('laws/adding_laws');
            return;
        }

        // Upload configuration
        $config['upload_path'] = './docs/file';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);

        // Upload main file
        if (!$this->upload->do_upload('laws_pdf')) {
            // If the file size exceeds the max_size, set flash data and redirect
            $this->session->set_flashdata('save_maxsize', TRUE);
            redirect('laws/adding_laws');
            return;
        }

        $data = $this->upload->data();
        $filename = $data['file_name'];

        $data = array(
            'laws_ref_id' => $this->input->post('laws_ref_id'),
            'laws_name' => $this->input->post('laws_name'),
            'laws_date' => $this->input->post('laws_date'),
            'laws_by' => $this->session->userdata('m_fname'),
            'laws_pdf' => $filename
        );

        $query = $this->db->insert('tbl_laws', $data);

        $this->space_model->update_server_current();

        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('Error !');";
            echo "</script>";
        }
    }

    public function read_laws($laws_id)
    {
        $this->db->where('laws_id', $laws_id);
        $query = $this->db->get('tbl_laws');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function edit_laws($laws_id)
    {
        $old_document = $this->db->get_where('tbl_laws', array('laws_id' => $laws_id))->row();

        $update_doc_file = !empty($_FILES['laws_pdf']['name']) && $old_document->laws_pdf != $_FILES['laws_pdf']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        if ($update_doc_file) {
            $old_file_path = './docs/file/' . $old_document->laws_pdf;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }

            // Check used space
            $used_space_mb = $this->space_model->get_used_space();
            $upload_limit_mb = $this->space_model->get_limit_storage();

            $total_space_required = 0;
            if (!empty($_FILES['laws_pdf']['name'])) {
                $total_space_required += $_FILES['laws_pdf']['size'];
            }

            if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
                $this->session->set_flashdata('save_error', TRUE);
                redirect('laws/editing_laws');
                return;
            }

            $config['upload_path'] = './docs/file';
            $config['allowed_types'] = 'pdf';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('laws_pdf')) {
                echo $this->upload->display_errors();
                return;
            }

            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            // ใช้รูปภาพเดิม
            $filename = $old_document->laws_pdf;
        }

        $data = array(
            'laws_name' => $this->input->post('laws_name'),
            'laws_date' => $this->input->post('laws_date'),
            'laws_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            'laws_pdf' => $filename
        );

        $this->db->where('laws_id', $laws_id);
        $query = $this->db->update('tbl_laws', $data);

        $this->space_model->update_server_current();


        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล !');";
            echo "</script>";
        }
    }

    public function del_laws($laws_id)
    {
        $old_document = $this->db->get_where('tbl_laws', array('laws_id' => $laws_id))->row();

        $old_file_path = './docs/file/' . $old_document->laws_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_laws', array('laws_id' => $laws_id));
    }

    public function del_laws_all($laws_topic_id)
    {
        // Delete files from tbl_laws and get the file names
        $laws = $this->db->get_where('tbl_laws', array('laws_ref_id' => $laws_topic_id))->result();
        foreach ($laws as $law) {
            $old_file_path = './docs/file/' . $law->laws_pdf;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }
        }

        // Delete from tbl_laws
        $this->db->delete('tbl_laws', array('laws_ref_id' => $laws_topic_id));

        // Delete from tbl_laws_topic
        $this->db->where('laws_topic_id', $laws_topic_id);
        $this->db->delete('tbl_laws_topic');
    }
}
