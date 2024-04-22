<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operation_caar_backend extends CI_Controller
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
        $this->load->model('operation_caar_model');
    }

    public function index()
    {
        $operation_caar = $this->operation_caar_model->list_all();

        foreach ($operation_caar as $pdf) {
            $pdf->pdf = $this->operation_caar_model->list_all_pdf($pdf->operation_caar_id);
        }
        foreach ($operation_caar as $doc) {
            $doc->doc = $this->operation_caar_model->list_all_doc($doc->operation_caar_id);
        }


        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_caar', ['operation_caar' => $operation_caar]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_caar_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $this->operation_caar_model->add();
        redirect('operation_caar_backend');
    }


    public function editing($operation_caar_id)
    {
        $data['rsedit'] = $this->operation_caar_model->read($operation_caar_id);
        $data['rsPdf'] = $this->operation_caar_model->read_pdf($operation_caar_id);
        $data['rsDoc'] = $this->operation_caar_model->read_doc($operation_caar_id);
        $data['rsImg'] = $this->operation_caar_model->read_img($operation_caar_id);
        // echo '<pre>';
        // print_r($data['rsfile']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/operation_caar_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($operation_caar_id)
    {
        $this->operation_caar_model->edit($operation_caar_id);
        redirect('operation_caar_backend');
    }

    public function update_operation_caar_status()
    {
        $this->operation_caar_model->update_operation_caar_status();
    }

    public function del_pdf($pdf_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $pdf_id
        $this->operation_caar_model->del_pdf($pdf_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_doc($doc_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $doc_id
        $this->operation_caar_model->del_doc($doc_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->operation_caar_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_operation_caar($operation_caar_id)
    {
        $this->operation_caar_model->del_operation_caar_img($operation_caar_id);
        $this->operation_caar_model->del_operation_caar_pdf($operation_caar_id);
        $this->operation_caar_model->del_operation_caar_doc($operation_caar_id);
        $this->operation_caar_model->del_operation_caar($operation_caar_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('operation_caar_backend');
    }
}
