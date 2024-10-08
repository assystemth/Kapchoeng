<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Intra_share_file extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (
        //     $this->session->userdata('m_level') != 1 &&
        //     $this->session->userdata('m_level') != 2 &&
        //     $this->session->userdata('m_level') != 3 &&
        //     $this->session->userdata('m_level') != 4
        // ) {
        //     redirect('user', 'refresh');
        // }
        $this->load->model('space_model');
        $this->load->model('Intra_share_file_model');
    }
    public function index()
    {
        $data['storage'] = $this->space_model->list_all();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/share_file', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    // แชร์ไฟล์ภายในองค์กร **********************************************************************
    public function sf_all()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_all();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_all', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_all()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_all($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_all();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_all', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_all()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_all();
        redirect('Intra_share_file/sf_all');
    }

    public function del_sf_all($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_all($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_all');
    }
    // ********************************************************************************


    // คณะผู้บริหาร **********************************************************************
    public function sf_executive()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_executive();


        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_executive', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_executive()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_executive($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_executive();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_executive', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_executive()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_executive();
        redirect('Intra_share_file/sf_executive');
    }

    public function del_sf_executive($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_executive($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_executive');
    }
    // ทำเนียบธงธานี **********************************************************************
    public function sf_palace()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_palace();


        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_palace', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_palace()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_palace($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_palace();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_palace', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_palace()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_palace();
        redirect('Intra_share_file/sf_palace');
    }

    public function del_sf_palace($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_palace($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_palace');
    }
    // *****************************************************************************************
    // พนักงานเทศบาล **********************************************************************
    public function sf_employee()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_employee();


        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_employee', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_employee()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_employee($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_employee();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_employee', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_employee()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_employee();
        redirect('Intra_share_file/sf_employee');
    }

    public function del_sf_employee($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_employee($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_employee');
    }
    // *****************************************************************************************

    // กองประปา ************************************************************************
    public function sf_audit()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_audit();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_audit', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_audit()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_audit($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_audit();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_audit', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_audit()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_audit();
        redirect('Intra_share_file/sf_audit');
    }

    public function del_sf_audit($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_audit($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_audit');
    }
    // *****************************************************************************************
    //  ************************************************************************
    public function sf_learder()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_learder();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_learder', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_learder()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_learder($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_learder();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_learder', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_learder()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_learder();
        redirect('Intra_share_file/sf_learder');
    }

    public function del_sf_learder($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_learder($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_learder');
    }
    // *****************************************************************************************
    // กองประปา ************************************************************************
    public function sf_dsab()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_dsab();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_dsab', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_dsab()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_dsab($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_dsab();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_dsab', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_dsab()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_dsab();
        redirect('Intra_share_file/sf_dsab');
    }

    public function del_sf_dsab($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_dsab($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_dsab');
    }
    // *****************************************************************************************

    // กองคลัง **********************************************************************************
    public function sf_treasury()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_treasury();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_treasury', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_treasury()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_treasury($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_treasury();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_treasury', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_treasury()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_treasury();
        redirect('Intra_share_file/sf_treasury');
    }

    public function del_sf_treasury($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_treasury($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_treasury');
    }
    // *****************************************************************************************

    // กองช่าง **********************************************************************************
    public function sf_maintenance()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_maintenance();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_maintenance', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_maintenance()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_maintenance($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_maintenance();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_maintenance', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_maintenance()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_maintenance();
        redirect('Intra_share_file/sf_maintenance');
    }

    public function del_sf_maintenance($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_maintenance($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_maintenance');
    }
    // *****************************************************************************************

    // สำนักปลัด **********************************************************************************
    public function sf_deputy()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_deputy();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_deputy', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_deputy()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_deputy($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_deputy();
        }

        $this->load->view('intranet_templat/header');
        $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_deputy', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_deputy()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_deputy();
        redirect('Intra_share_file/sf_deputy');
    }

    public function del_sf_deputy($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_deputy($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_deputy');
    }
    // *****************************************************************************************

    // สมาชิกสภาตำบล ***************************************************************************
    public function sf_council()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_council();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_council', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_council()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_council($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_council();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_council', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_council()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_council();
        redirect('Intra_share_file/sf_council');
    }

    public function del_sf_council($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_council($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_council');
    }
    // *****************************************************************************************

    // หัวหน้าหน่วยราชการ ***************************************************************************
    public function sf_unit_leaders()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_unit_leaders();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_unit_leaders', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_unit_leaders()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_unit_leaders($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_unit_leaders();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_unit_leaders', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_unit_leaders()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_unit_leaders();
        redirect('Intra_share_file/sf_unit_leaders');
    }

    public function del_sf_unit_leaders($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_unit_leaders($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_unit_leaders');
    }
    // *****************************************************************************************

    // กองการศึกษา ***************************************************************************
    public function sf_education()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_education();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_education', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_education()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_education($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_education();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_education', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_education()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_education();
        redirect('Intra_share_file/sf_education');
    }

    public function del_sf_education($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_education($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_education');
    }
    // *****************************************************************************************

    // กองยุท ***************************************************************************
    public function sf_p_dsab()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_dsab();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_dsab', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_dsab()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_dsab($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_dsab();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_dsab', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_dsab()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_dsab();
        redirect('Intra_share_file/sf_p_dsab');
    }

    public function del_sf_p_dsab($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_dsab($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_dsab');
    }
    // *****************************************************************************************

    // ศูนย์ ***************************************************************************
    public function sf_p_cdc_brkm()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_brkm();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_brkm', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_cdc_brkm()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_cdc_brkm($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_brkm();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_brkm', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_cdc_brkm()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_cdc_brkm();
        redirect('Intra_share_file/sf_p_cdc_brkm');
    }

    public function del_sf_p_cdc_brkm($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_cdc_brkm($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_cdc_brkm');
    }
    // *****************************************************************************************

    // ศูนย์ ***************************************************************************
    public function sf_p_cdc_bpsb()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bpsb();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bpsb', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_cdc_bpsb()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_cdc_bpsb($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bpsb();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bpsb', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_cdc_bpsb()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_cdc_bpsb();
        redirect('Intra_share_file/sf_p_cdc_bpsb');
    }

    public function del_sf_p_cdc_bpsb($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_cdc_bpsb($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_cdc_bpsb');
    }
    // *****************************************************************************************

    // ศูนย์พัฒนาเด็กเล็กบ้านบักจรัง ***************************************************************************
    public function sf_p_cdc_bbj()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bbj();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bbj', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_cdc_bbj()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_cdc_bbj($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bbj();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bbj', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_cdc_bbj()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_cdc_bbj();
        redirect('Intra_share_file/sf_p_cdc_bbj');
    }

    public function del_sf_p_cdc_bbj($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_cdc_bbj($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_cdc_bbj');
    }
    // *****************************************************************************************

    // ศูนย์พัฒนาเด็กเล็กบ้านน้อยร่มเย็น ***************************************************************************
    public function sf_p_cdc_bnry()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bnry();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bnry', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_cdc_bnry()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_cdc_bnry($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bnry();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bnry', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_cdc_bnry()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_cdc_bnry();
        redirect('Intra_share_file/sf_p_cdc_bnry');
    }

    public function del_sf_p_cdc_bnry($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_cdc_bnry($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_cdc_bnry');
    }
    // *****************************************************************************************

    // ศูนย์พัฒนาเด็กเล็กบ้านกาบเชิง ***************************************************************************
    public function sf_p_cdc_bkc()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bkc();

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bkc', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function search_sf_p_cdc_bkc()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_p_cdc_bkc($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_p_cdc_bkc();
        }

        $this->load->view('intranet_templat/header');
                $this->load->view('intranet_templat/btm_header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/sf_p_cdc_bkc', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('intranet_templat/footer');
    }

    public function add_sf_p_cdc_bkc()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_sf_p_cdc_bkc();
        redirect('Intra_share_file/sf_p_cdc_bkc');
    }

    public function del_sf_p_cdc_bkc($intra_form_id)
    {
        $this->Intra_share_file_model->del_sf_p_cdc_bkc($intra_form_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_p_cdc_bkc');
    }
    // *****************************************************************************************
}
