<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total();
        $page['feto'] = $this->Apftl_chart->get_feto();
        $page['mane'] = $this->Apftl_chart->get_mane();
        $page['program'] = $this->Apftl_chart->get_program();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $page);
        $this->load->view('templates/footer');
    }
    public function getTotal()
    {
        $this->load->model('Apftl_chart');
        $datatotal = $this->Apftl_chart->get_data_sum();
        echo json_encode($datatotal);
        //print_r($cek);
        //exit();
    }
}
