<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_selected extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Election Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_election_selected');
        //$page['selected'] = $this->Apftl_chart->get_selected();
        //$page['selected'] = $this->Apftl_chart->get_select();
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['validu'] = $this->Apftl_chart->get_validu();
        //$page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('election/selected', $data);
        $this->load->view('templates/footer');
    }

    public function selectedTotal()
    {
        $this->load->model('Apftl_election_selected');
        $selectedtotal = $this->Apftl_election_selected->get_selected_total();
        $cek= json_encode($selectedtotal);
        print_r($cek);
        exit();
    }

    public function selectedAll()
    {
        $this->load->model('Apftl_election_selected');
        $selectedall = $this->Apftl_election_selected->get_selected_all();
        echo json_encode($selectedall);
        //print_r($cek);
        //exit();
    }

    public function selectedDili()
    {
        $this->load->model('Apftl_election_selected');
        $selecteddili = $this->Apftl_election_selected->get_selected_dili();
        echo json_encode($selecteddili);
        //print_r($cek);
        //exit();
    }

    public function selectedDiliall()
    {
        $this->load->model('Apftl_election_selected');
        $selecteddiliall = $this->Apftl_election_selected->get_selected_diliall();
        echo json_encode($selecteddiliall);
        //print_r($cek);
        //exit();
    }

    public function selectedCovalima()
    {
        $this->load->model('Apftl_election_selected');
        $selectedcovalima = $this->Apftl_election_selected->get_selected_covalima();
        echo json_encode($selectedcovalima);
        //print_r($cek);
        //exit();
    }

    public function selectedCovalimaall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedcovalimaall = $this->Apftl_election_selected->get_selected_covalimaall();
        echo json_encode($selectedcovalimaall);
        //print_r($cek);
        //exit();
    }

    public function selectedBaucau()
    {
        $this->load->model('Apftl_election_selected');
        $selectedbaucau = $this->Apftl_election_selected->get_selected_baucau();
        echo json_encode($selectedbaucau);
        //print_r($cek);
        //exit();
    }

    public function selectedBaucauall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedbaucauall = $this->Apftl_election_selected->get_selected_baucauall();
        echo json_encode($selectedbaucauall);
        //print_r($cek);
        //exit();
    }

    public function selectedBobonaro()
    {
        $this->load->model('Apftl_election_selected');
        $selectedbobonaro = $this->Apftl_election_selected->get_selected_bobonaro();
        echo json_encode($selectedbobonaro);
        //print_r($cek);
        //exit();
    }

    public function selectedBobonaroall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedbobonaroall = $this->Apftl_election_selected->get_selected_bobonaroall();
        echo json_encode($selectedbobonaroall);
        //print_r($cek);
        //exit();
    }

    public function selectedLiquica()
    {
        $this->load->model('Apftl_election_selected');
        $selectedliquica = $this->Apftl_election_selected->get_selected_liquica();
        echo json_encode($selectedliquica);
        //print_r($cek);
        //exit();
    }

    public function selectedLiquicaall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedliquicaall = $this->Apftl_election_selected->get_selected_liquicaall();
        echo json_encode($selectedliquicaall);
        //print_r($cek);
        //exit();
    }
}