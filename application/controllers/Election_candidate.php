<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_candidate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    

    public function index()
    {
        $data['title'] = 'Election Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_election_candidate');
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['candidate'] = $this->Apftl_chart->get_select();
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['validu'] = $this->Apftl_chart->get_validu();
        //$page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_elisaun', $data);
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

    public function candidateAileu()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateaileu = $this->Apftl_election_candidate->get_candidate_aileu();
        echo json_encode($candidateaileu);
        //print_r($cek);
        //exit();
    }

    public function candidateAileuall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateaileuall = $this->Apftl_election_candidate->get_candidate_aileuall();
        echo json_encode($candidateaileuall);
        //print_r($cek);
        //exit();
    }

    public function candidateAinaro()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateainaro = $this->Apftl_election_candidate->get_candidate_ainaro();
        echo json_encode($candidateainaro);
        //print_r($cek);
        //exit();
    }

    public function candidateAinaroall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateainaroall = $this->Apftl_election_candidate->get_candidate_ainaroall();
        echo json_encode($candidateainaroall);
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

    public function candidateErmera()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateermera = $this->Apftl_election_candidate->get_candidate_ermera();
        echo json_encode($candidateermera);
        //print_r($cek);
        //exit();
    }

    public function candidateErmeraall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateermeraall = $this->Apftl_election_candidate->get_candidate_ermeraall();
        echo json_encode($candidateermeraall);
        //print_r($cek);
        //exit();
    }

    public function candidateLautem()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatelautem = $this->Apftl_election_candidate->get_candidate_lautem();
        echo json_encode($candidatelautem);
        //print_r($cek);
        //exit();
    }

    public function candidateLautemall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatelautemall = $this->Apftl_election_candidate->get_candidate_lautemall();
        echo json_encode($candidatelautemall);
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

    public function candidateManufahi()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatemanufahi = $this->Apftl_election_candidate->get_candidate_manufahi();
        echo json_encode($candidatemanufahi);
        //print_r($cek);
        //exit();
    }

    public function candidateManufahiall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatemanufahiall = $this->Apftl_election_candidate->get_candidate_manufahiall();
        echo json_encode($candidatemanufahiall);
        //print_r($cek);
        //exit();
    }

    public function candidateManatuto()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatemanatuto = $this->Apftl_election_candidate->get_candidate_manatuto();
        echo json_encode($candidatemanatuto);
        //print_r($cek);
        //exit();
    }

    public function candidateManatutoall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidatemanatutoall = $this->Apftl_election_candidate->get_candidate_manatutoall();
        echo json_encode($candidatemanatutoall);
        //print_r($cek);
        //exit();
    }

    public function candidateRaeoa()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateraeoa = $this->Apftl_election_candidate->get_candidate_raeoa();
        echo json_encode($candidateraeoa);
        //print_r($cek);
        //exit();
    }

    public function candidateRaeoaall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateraeoaall = $this->Apftl_election_candidate->get_candidate_raeoaall();
        echo json_encode($candidateraeoaall);
        //print_r($cek);
        //exit();
    }

    public function candidateViqueque()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateviqueque = $this->Apftl_election_candidate->get_candidate_viqueque();
        echo json_encode($candidateviqueque);
        //print_r($cek);
        //exit();
    }

    public function candidateViquequeall()
    {
        $this->load->model('Apftl_election_candidate');
        $candidateviquequeall = $this->Apftl_election_candidate->get_candidate_viquequeall();
        echo json_encode($candidateviquequeall);
        //print_r($cek);
        //exit();
    }
}