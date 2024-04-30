<?php
defined('BASEPATH') or exit('No direct script access allowed');

class plan_pbawa_backend extends CI_Controller
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
        $this->load->model('plan_pbawa_model');
    }

    public function index()
    {
        $plan_pbawa = $this->plan_pbawa_model->list_all();

        foreach ($plan_pbawa as $pdf) {
            $pdf->pdf = $this->plan_pbawa_model->list_all_pdf($pdf->plan_pbawa_id);
        }
        foreach ($plan_pbawa as $doc) {
            $doc->doc = $this->plan_pbawa_model->list_all_doc($doc->plan_pbawa_id);
        }


        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pbawa', ['plan_pbawa' => $plan_pbawa]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pbawa_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $this->plan_pbawa_model->add();
        redirect('plan_pbawa_backend');
    }


    public function editing($plan_pbawa_id)
    {
        $data['rsedit'] = $this->plan_pbawa_model->read($plan_pbawa_id);
        $data['rsPdf'] = $this->plan_pbawa_model->read_pdf($plan_pbawa_id);
        $data['rsDoc'] = $this->plan_pbawa_model->read_doc($plan_pbawa_id);
        $data['rsImg'] = $this->plan_pbawa_model->read_img($plan_pbawa_id);
        // echo '<pre>';
        // print_r($data['rsfile']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pbawa_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($plan_pbawa_id)
    {
        $this->plan_pbawa_model->edit($plan_pbawa_id);
        redirect('plan_pbawa_backend');
    }

    public function update_plan_pbawa_status()
    {
        $this->plan_pbawa_model->update_plan_pbawa_status();
    }

    public function del_pdf($pdf_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $pdf_id
        $this->plan_pbawa_model->del_pdf($pdf_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_doc($doc_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $doc_id
        $this->plan_pbawa_model->del_doc($doc_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->plan_pbawa_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_plan_pbawa($plan_pbawa_id)
    {
        $this->plan_pbawa_model->del_plan_pbawa_img($plan_pbawa_id);
        $this->plan_pbawa_model->del_plan_pbawa_pdf($plan_pbawa_id);
        $this->plan_pbawa_model->del_plan_pbawa_doc($plan_pbawa_id);
        $this->plan_pbawa_model->del_plan_pbawa($plan_pbawa_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('plan_pbawa_backend');
    }
}
