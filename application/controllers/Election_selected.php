<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Election_selected extends CI_Controller
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

    public function selectedAileu()
    {
        $this->load->model('Apftl_election_selected');
        $selectedaileu = $this->Apftl_election_selected->get_selected_aileu();
        echo json_encode($selectedaileu);
        //print_r($cek);
        //exit();
    }

    public function selectedAileuall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedaileuall = $this->Apftl_election_selected->get_selected_aileuall();
        echo json_encode($selectedaileuall);
        //print_r($cek);
        //exit();
    }

    public function selectedAinaro()
    {
        $this->load->model('Apftl_election_selected');
        $selectedainaro = $this->Apftl_election_selected->get_selected_ainaro();
        echo json_encode($selectedainaro);
        //print_r($cek);
        //exit();
    }

    public function selectedAinaroall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedainaroall = $this->Apftl_election_selected->get_selected_ainaroall();
        echo json_encode($selectedainaroall);
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

    public function selectedErmera()
    {
        $this->load->model('Apftl_election_selected');
        $selectedermera = $this->Apftl_election_selected->get_selected_ermera();
        echo json_encode($selectedermera);
        //print_r($cek);
        //exit();
    }

    public function selectedErmeraall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedermeraall = $this->Apftl_election_selected->get_selected_ermeraall();
        echo json_encode($selectedermeraall);
        //print_r($cek);
        //exit();
    }

    public function selectedLautem()
    {
        $this->load->model('Apftl_election_selected');
        $selectedlautem = $this->Apftl_election_selected->get_selected_lautem();
        echo json_encode($selectedlautem);
        //print_r($cek);
        //exit();
    }

    public function selectedLautemall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedlautemall = $this->Apftl_election_selected->get_selected_lautemall();
        echo json_encode($selectedlautemall);
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

    public function selectedManufahi()
    {
        $this->load->model('Apftl_election_selected');
        $selectedmanufahi = $this->Apftl_election_selected->get_selected_manufahi();
        echo json_encode($selectedmanufahi);
        //print_r($cek);
        //exit();
    }

    public function selectedManufahiall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedmanufahiall = $this->Apftl_election_selected->get_selected_manufahiall();
        echo json_encode($selectedmanufahiall);
        //print_r($cek);
        //exit();
    }

    public function selectedManatuto()
    {
        $this->load->model('Apftl_election_selected');
        $selectedmanatuto = $this->Apftl_election_selected->get_selected_manatuto();
        echo json_encode($selectedmanatuto);
        //print_r($cek);
        //exit();
    }

    public function selectedManatutoall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedmanatutoall = $this->Apftl_election_selected->get_selected_manatutoall();
        echo json_encode($selectedmanatutoall);
        //print_r($cek);
        //exit();
    }

    public function selectedRaeoa()
    {
        $this->load->model('Apftl_election_selected');
        $selectedraeoa = $this->Apftl_election_selected->get_selected_raeoa();
        echo json_encode($selectedraeoa);
        //print_r($cek);
        //exit();
    }

    public function selectedRaeoaall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedraeoaall = $this->Apftl_election_selected->get_selected_raeoaall();
        echo json_encode($selectedraeoaall);
        //print_r($cek);
        //exit();
    }

    public function selectedViqueque()
    {
        $this->load->model('Apftl_election_selected');
        $selectedviqueque = $this->Apftl_election_selected->get_selected_viqueque();
        echo json_encode($selectedviqueque);
        //print_r($cek);
        //exit();
    }

    public function selectedViquequeall()
    {
        $this->load->model('Apftl_election_selected');
        $selectedviquequeall = $this->Apftl_election_selected->get_selected_viquequeall();
        echo json_encode($selectedviquequeall);
        //print_r($cek);
        //exit();
    }
}