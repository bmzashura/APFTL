<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_candidate extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Election Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_election_candidate');
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['selected'] = $this->Apftl_chart->get_select();
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['validu'] = $this->Apftl_chart->get_validu();
        //$page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('election/candidate', $data);
        $this->load->view('templates/footer');
    }

    public function candidateTotal()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatetotal = $this->Apftl_election_candidate->get_candidate_total();
        $cek= json_encode($candidatetotal);
        print_r($cek);
        exit();
    }

    public function candidateAll()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateall = $this->Apftl_election_candidate->get_candidate_all();
        echo json_encode($candidateall);
        //print_r($cek);
        //exit();
    }

    public function candidateDili()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatedili = $this->Apftl_election_candidate->get_candidate_dili();
        echo json_encode($candidatedili);
        //print_r($cek);
        //exit();
    }

    public function candidateDiliall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatediliall = $this->Apftl_election_candidate->get_candidate_diliall();
        echo json_encode($candidatediliall);
        //print_r($cek);
        //exit();
    }

    public function candidateCovalima()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatecovalima = $this->Apftl_election_candidate->get_candidate_covalima();
        echo json_encode($candidatecovalima);
        //print_r($cek);
        //exit();
    }

    public function candidateCovalimaall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatecovalimaall = $this->Apftl_election_candidate->get_candidate_covalimaall();
        echo json_encode($candidatecovalimaall);
        //print_r($cek);
        //exit();
    }

    public function candidateBaucau()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatebaucau = $this->Apftl_election_candidate->get_candidate_baucau();
        echo json_encode($candidatebaucau);
        //print_r($cek);
        //exit();
    }

    public function candidateBaucauall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatebaucauall = $this->Apftl_election_candidate->get_candidate_baucauall();
        echo json_encode($candidatebaucauall);
        //print_r($cek);
        //exit();
    }

    public function candidateBobonaro()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatebobonaro = $this->Apftl_election_candidate->get_candidate_bobonaro();
        echo json_encode($candidatebobonaro);
        //print_r($cek);
        //exit();
    }

    public function candidateBobonaroall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatebobonaroall = $this->Apftl_election_candidate->get_candidate_bobonaroall();
        echo json_encode($candidatebobonaroall);
        //print_r($cek);
        //exit();
    }

    public function candidateLiquica()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateliquica = $this->Apftl_election_candidate->get_candidate_liquica();
        echo json_encode($candidateliquica);
        //print_r($cek);
        //exit();
    }

    public function candidateLiquicaall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateliquicaall = $this->Apftl_election_candidate->get_candidate_liquicaall();
        echo json_encode($candidateliquicaall);
        //print_r($cek);
        //exit();
    }
}