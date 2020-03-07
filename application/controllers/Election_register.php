<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_register extends CI_Controller
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
        $this->load->model('Apftl_election_register');
        //$page['register'] = $this->Apftl_chart->get_register();
        //$page['selected'] = $this->Apftl_chart->get_select();
        //$page['candidate'] = $this->Apftl_chart->get_candidate();
        //$page['validu'] = $this->Apftl_chart->get_validu();
        //$page['invalidu'] = $this->Apftl_chart->get_invalidu();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_elisaun', $data);
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

    public function registerAileu()
    {
        $this->load->model('Apftl_election_register');
        $registeraileu = $this->Apftl_election_register->get_register_aileu();
        echo json_encode($registeraileu);
        //print_r($cek);
        //exit();
    }

    public function registerAileuall()
    {
        $this->load->model('Apftl_election_register');
        $registeraileuall = $this->Apftl_election_register->get_register_aileuall();
        echo json_encode($registeraileuall);
        //print_r($cek);
        //exit();
    }

    public function registerAinaro()
    {
        $this->load->model('Apftl_election_register');
        $registerainaro = $this->Apftl_election_register->get_register_ainaro();
        echo json_encode($registerainaro);
        //print_r($cek);
        //exit();
    }

    public function registerAinaroall()
    {
        $this->load->model('Apftl_election_register');
        $registerainaroall = $this->Apftl_election_register->get_register_ainaroall();
        echo json_encode($registerainaroall);
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

    public function registerErmera()
    {
        $this->load->model('Apftl_election_register');
        $registerermera = $this->Apftl_election_register->get_register_ermera();
        echo json_encode($registerermera);
        //print_r($cek);
        //exit();
    }

    public function registerErmeraall()
    {
        $this->load->model('Apftl_election_register');
        $registerermeraall = $this->Apftl_election_register->get_register_ermeraall();
        echo json_encode($registerermeraall);
        //print_r($cek);
        //exit();
    }

    public function registerLautem()
    {
        $this->load->model('Apftl_election_register');
        $registerlautem = $this->Apftl_election_register->get_register_lautem();
        echo json_encode($registerlautem);
        //print_r($cek);
        //exit();
    }

    public function registerLautemall()
    {
        $this->load->model('Apftl_election_register');
        $registerlautemall = $this->Apftl_election_register->get_register_lautemall();
        echo json_encode($registerlautemall);
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

    public function registerManufahi()
    {
        $this->load->model('Apftl_election_register');
        $registermanufahi = $this->Apftl_election_register->get_register_manufahi();
        echo json_encode($registermanufahi);
        //print_r($cek);
        //exit();
    }

    public function registerManufahiall()
    {
        $this->load->model('Apftl_election_register');
        $registermanufahiall = $this->Apftl_election_register->get_register_manufahiall();
        echo json_encode($registermanufahiall);
        //print_r($cek);
        //exit();
    }

    public function registerManatuto()
    {
        $this->load->model('Apftl_election_register');
        $registermanatuto = $this->Apftl_election_register->get_register_manatuto();
        echo json_encode($registermanatuto);
        //print_r($cek);
        //exit();
    }

    public function registerManatutoall()
    {
        $this->load->model('Apftl_election_register');
        $registermanatutoall = $this->Apftl_election_register->get_register_manatutoall();
        echo json_encode($registermanatutoall);
        //print_r($cek);
        //exit();
    }

    public function registerRaeoa()
    {
        $this->load->model('Apftl_election_register');
        $registerraeoa = $this->Apftl_election_register->get_register_raeoa();
        echo json_encode($registerraeoa);
        //print_r($cek);
        //exit();
    }

    public function registerRaeoaall()
    {
        $this->load->model('Apftl_election_register');
        $registerraeoaall = $this->Apftl_election_register->get_register_raeoaall();
        echo json_encode($registerraeoaall);
        //print_r($cek);
        //exit();
    }

    public function registerViqueque()
    {
        $this->load->model('Apftl_election_register');
        $registerviqueque = $this->Apftl_election_register->get_register_viqueque();
        echo json_encode($registerviqueque);
        //print_r($cek);
        //exit();
    }

    public function registerViquequeall()
    {
        $this->load->model('Apftl_election_register');
        $registerviquequeall = $this->Apftl_election_register->get_register_viquequeall();
        echo json_encode($registerviquequeall);
        //print_r($cek);
        //exit();
    }
}