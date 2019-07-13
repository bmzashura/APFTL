<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_register extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Election Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_election_register');
        //$page['register'] = $this->Apftl_chart->get_register();
        //$page['selected'] = $this->Apftl_chart->get_select();
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['validu'] = $this->Apftl_chart->get_validu();
        //$page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('election/register', $data);
        $this->load->view('templates/footer');
    }

    public function registerTotal()
    {
        $this->load->model('Apftl_election_register');
        $registertotal = $this->Apftl_election_register->get_register_total();
        $cek= json_encode($registertotal);
        print_r($cek);
        exit();
    }

    public function registerAll()
    {
        $this->load->model('Apftl_election_register');
        $registerall = $this->Apftl_election_register->get_register_all();
        echo json_encode($registerall);
        //print_r($cek);
        //exit();
    }

    public function registerDili()
    {
        $this->load->model('Apftl_election_register');
        $registerdili = $this->Apftl_election_register->get_register_dili();
        echo json_encode($registerdili);
        //print_r($cek);
        //exit();
    }

    public function registerDiliall()
    {
        $this->load->model('Apftl_election_register');
        $registerdiliall = $this->Apftl_election_register->get_register_diliall();
        echo json_encode($registerdiliall);
        //print_r($cek);
        //exit();
    }

    public function registerCovalima()
    {
        $this->load->model('Apftl_election_register');
        $registercovalima = $this->Apftl_election_register->get_register_covalima();
        echo json_encode($registercovalima);
        //print_r($cek);
        //exit();
    }

    public function registerCovalimaall()
    {
        $this->load->model('Apftl_election_register');
        $registercovalimaall = $this->Apftl_election_register->get_register_covalimaall();
        echo json_encode($registercovalimaall);
        //print_r($cek);
        //exit();
    }

    public function registerBaucau()
    {
        $this->load->model('Apftl_election_register');
        $registerbaucau = $this->Apftl_election_register->get_register_baucau();
        echo json_encode($registerbaucau);
        //print_r($cek);
        //exit();
    }

    public function registerBaucauall()
    {
        $this->load->model('Apftl_election_register');
        $registerbaucauall = $this->Apftl_election_register->get_register_baucauall();
        echo json_encode($registerbaucauall);
        //print_r($cek);
        //exit();
    }

    public function registerBobonaro()
    {
        $this->load->model('Apftl_election_register');
        $registerbobonaro = $this->Apftl_election_register->get_register_bobonaro();
        echo json_encode($registerbobonaro);
        //print_r($cek);
        //exit();
    }

    public function registerBobonaroall()
    {
        $this->load->model('Apftl_election_register');
        $registerbobonaroall = $this->Apftl_election_register->get_register_bobonaroall();
        echo json_encode($registerbobonaroall);
        //print_r($cek);
        //exit();
    }

    public function registerLiquica()
    {
        $this->load->model('Apftl_election_register');
        $registerliquica = $this->Apftl_election_register->get_register_liquica();
        echo json_encode($registerliquica);
        //print_r($cek);
        //exit();
    }

    public function registerLiquicaall()
    {
        $this->load->model('Apftl_election_register');
        $registerliquicaall = $this->Apftl_election_register->get_register_liquicaall();
        echo json_encode($registerliquicaall);
        //print_r($cek);
        //exit();
    }
}