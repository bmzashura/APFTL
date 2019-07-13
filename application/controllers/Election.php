<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Election Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['register'] = $this->Apftl_chart->get_register();
        $page['selected'] = $this->Apftl_chart->get_select();
        $page['candidate'] = $this->Apftl_chart->get_candidate();
        $page['validu'] = $this->Apftl_chart->get_validu();
        $page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/election', $page);
        $this->load->view('templates/footer');
    }

    public function getDili()
    {
        $this->load->model('Apftl_chart');
        $datadili = $this->Apftl_chart->get_data_dili();
        echo json_encode($datadili);
        //print_r($cek);
        //exit();
    }

    public function getCovalima()
    {
        $this->load->model('Apftl_chart');
        $datacovalima = $this->Apftl_chart->get_data_covalima();
        echo json_encode($datacovalima);
        //print_r($cek);
        //exit();
    }

    public function getBaucau()
    {
        $this->load->model('Apftl_chart');
        $databaucau = $this->Apftl_chart->get_data_baucau();
        echo json_encode($databaucau);
        //print_r($cek);
        //exit();
    }

    public function getBobonaro()
    {
        $this->load->model('Apftl_chart');
        $databobonaro = $this->Apftl_chart->get_data_bobonaro();
        echo json_encode($databobonaro);
        //print_r($cek);
        //exit();
    }

    public function getLiquica()
    {
        $this->load->model('Apftl_chart');
        $dataliquica = $this->Apftl_chart->get_data_liquica();
        echo json_encode($dataliquica);
        //print_r($cek);
        //exit();
    }
}