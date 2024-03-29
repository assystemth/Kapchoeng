<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operation_cdm_backend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (
            $this->session->userdata('m_level') != 1 &&
            $this->session->userdata('m_level') != 2 &&
            $this->session->userdata('m_level') != 3 &&
            $this->session->userdata('m_level') != 4
        ) {
            redirect('user', 'refresh');
        }
        $this->load->model('member_model');
        $this->load->model('space_model');
        $this->load->model('operation_cdm_model');
    }

    public function index()
    {
        $data['query'] = $this->operation_cdm_model->list_type();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_cdm_type', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add_type()
    {
        $this->operation_cdm_model->add_type();
        redirect('operation_cdm_backend');
    }

    public function index_detail($operation_cdm_type_id)
    {
        $query = $this->operation_cdm_model->list_all($operation_cdm_type_id);

        foreach ($query as $files) {
            $files->file = $this->operation_cdm_model->list_all_pdf($files->operation_cdm_id);
        }

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_cdm', ['query' => $query]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $data['rs_type'] = $this->operation_cdm_model->list_operation_cdm_type();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_cdm_form_add', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $operation_cdm_ref_id = $this->input->post('operation_cdm_ref_id');
        $this->operation_cdm_model->add();
        redirect('operation_cdm_backend/index_detail/' . $operation_cdm_ref_id);
    }


    public function editing($operation_cdm_id)
    {
        $data['rs_type'] = $this->operation_cdm_model->list_operation_cdm_type();

        $data['rsedit'] = $this->operation_cdm_model->read($operation_cdm_id);
        $data['rsFile'] = $this->operation_cdm_model->read_file($operation_cdm_id);
        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_cdm_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function editing_type($operation_cdm_id)
    {
        $data['rs_type'] = $this->operation_cdm_model->read_type($operation_cdm_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_cdm_type_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($operation_cdm_id)
    {
        $operation_cdm_ref_id = $this->input->post('operation_cdm_ref_id');
        $this->operation_cdm_model->edit($operation_cdm_id);
        redirect('operation_cdm_backend/index_detail/' . $operation_cdm_ref_id);
    }

    public function edit_type($operation_cdm_type_id)
    {
        $this->operation_cdm_model->edit_type($operation_cdm_type_id);
        redirect('operation_cdm_backend');
    }

    public function toggleUserOperationCdmStatus()
    {
        if ($this->input->post()) {
            $operationCdmId = $this->input->post('operation_cdm_id');
            $newStatus = $this->input->post('new_status');

            // ทำการอัพเดตค่าในตาราง tbl_operation_cdm ในฐานข้อมูลของคุณ
            $data = array(
                'operation_cdm_status' => $newStatus
            );
            $this->db->where('operation_cdm_id', $operationCdmId);
            $this->db->update('tbl_operation_cdm', $data);

            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            show_404();
        }
    }

    public function del_pdf($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->operation_cdm_model->del_pdf($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->operation_cdm_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_operation_cdm($operation_cdm_id)
    {
        $this->operation_cdm_model->del_operation_cdm_pdf($operation_cdm_id);
        $this->operation_cdm_model->del_operation_cdm($operation_cdm_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('operation_cdm_backend');
    }

    public function del_operation_cdm_type($operation_cdm_type_id)
    {
        $this->operation_cdm_model->del_operation_cdm_pdf($operation_cdm_type_id);
        $this->operation_cdm_model->del_operation_cdm($operation_cdm_type_id);
        $this->operation_cdm_model->del_operation_cdm_type($operation_cdm_type_id);
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
        redirect('operation_cdm_backend');
    }
}
