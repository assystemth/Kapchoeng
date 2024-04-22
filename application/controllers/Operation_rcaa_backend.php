<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operation_rcaa_backend extends CI_Controller
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
        $this->load->model('operation_rcaa_model');
    }

    public function index()
    {
        $operation_rcaa = $this->operation_rcaa_model->list_all();

        foreach ($operation_rcaa as $pdf) {
            $pdf->pdf = $this->operation_rcaa_model->list_all_pdf($pdf->operation_rcaa_id);
        }
        foreach ($operation_rcaa as $doc) {
            $doc->doc = $this->operation_rcaa_model->list_all_doc($doc->operation_rcaa_id);
        }


        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_rcaa', ['operation_rcaa' => $operation_rcaa]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_rcaa_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $this->operation_rcaa_model->add();
        redirect('operation_rcaa_backend');
    }


    public function editing($operation_rcaa_id)
    {
        $data['rsedit'] = $this->operation_rcaa_model->read($operation_rcaa_id);
        $data['rsPdf'] = $this->operation_rcaa_model->read_pdf($operation_rcaa_id);
        $data['rsDoc'] = $this->operation_rcaa_model->read_doc($operation_rcaa_id);
        $data['rsImg'] = $this->operation_rcaa_model->read_img($operation_rcaa_id);
        // echo '<pre>';
        // print_r($data['rsfile']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_rcaa_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($operation_rcaa_id)
    {
        $this->operation_rcaa_model->edit($operation_rcaa_id);
        redirect('operation_rcaa_backend');
    }

    public function update_operation_rcaa_status()
    {
        $this->operation_rcaa_model->update_operation_rcaa_status();
    }

    public function del_pdf($pdf_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $pdf_id
        $this->operation_rcaa_model->del_pdf($pdf_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_doc($doc_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $doc_id
        $this->operation_rcaa_model->del_doc($doc_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->operation_rcaa_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_operation_rcaa($operation_rcaa_id)
    {
        $this->operation_rcaa_model->del_operation_rcaa_img($operation_rcaa_id);
        $this->operation_rcaa_model->del_operation_rcaa_pdf($operation_rcaa_id);
        $this->operation_rcaa_model->del_operation_rcaa_doc($operation_rcaa_id);
        $this->operation_rcaa_model->del_operation_rcaa($operation_rcaa_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('operation_rcaa_backend');
    }
}
