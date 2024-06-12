<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ita_point_backend extends CI_Controller
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
        $this->load->model('ita_point_model');
    }

    public function index()
    {
        $ita_point = $this->ita_point_model->list_all();

        foreach ($ita_point as $files) {
            $files->file = $this->ita_point_model->list_all_pdf($files->ita_point_id);
        }

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/ita_point', ['ita_point' => $ita_point]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/ita_point_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $this->ita_point_model->add();
        redirect('ita_point_backend');
    }


    public function editing($ita_point_id)
    {
        $data['rsedit'] = $this->ita_point_model->read($ita_point_id);
        $data['rsFile'] = $this->ita_point_model->read_file($ita_point_id);
        $data['rsImg'] = $this->ita_point_model->read_img($ita_point_id);
        // echo '<pre>';
        // print_r($data['rsfile']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/ita_point_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($ita_point_id)
    {
        $this->ita_point_model->edit($ita_point_id);
        redirect('ita_point_backend');
    }

    public function update_ita_point_status()
    {
        $this->ita_point_model->update_ita_point_status();
    }

    public function del_pdf($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->ita_point_model->del_pdf($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->ita_point_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_ita_point($ita_point_id)
    {
        $this->ita_point_model->del_ita_point_img($ita_point_id);
        $this->ita_point_model->del_ita_point_pdf($ita_point_id);
        $this->ita_point_model->del_ita_point($ita_point_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('ita_point_backend');
    }
}
