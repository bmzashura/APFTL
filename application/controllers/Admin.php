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
        $data['title'] = 'Beneficiariu Programa APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total();
        $page['feto'] = $this->Apftl_chart->get_feto();
        $page['mane'] = $this->Apftl_chart->get_mane();
        $page['program'] = $this->Apftl_chart->get_program();
        $this->load->model('Apftl_map');
        $page['aileu'] = $this->Apftl_map->get_aileu();
        $page['ainaro'] = $this->Apftl_map->get_ainaro();
        $page['baucau'] = $this->Apftl_map->get_baucau();
        $page['bobonaro'] = $this->Apftl_map->get_bobonaro();
        $page['covalima'] = $this->Apftl_map->get_covalima();
        $page['dili'] = $this->Apftl_map->get_dili();
        $page['ermera'] = $this->Apftl_map->get_ermera();
        $page['lautem'] = $this->Apftl_map->get_lautem();
        $page['liquica'] = $this->Apftl_map->get_liquica();
        $page['manatuto'] = $this->Apftl_map->get_manatuto();
        $page['manufahi'] = $this->Apftl_map->get_manufahi();
        $page['viqueque'] = $this->Apftl_map->get_viqueque();
        $page['raeoa'] = $this->Apftl_map->get_raeoa();    

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $page);
        $this->load->view('templates/footer');
    }


    public function getYear()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year();
        echo json_encode($totalyear);        
    }

    public function getAct()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack();
        echo json_encode($totalact);        
    }

    public function getCat()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat();
        echo json_encode($totalcat);               
    }

    public function getPersen()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen();
        echo json_encode($totalpersen);               
    }

    public function aileu()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Aileu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_aileu();
        $page['feto'] = $this->Apftl_chart->get_feto_aileu();
        $page['mane'] = $this->Apftl_chart->get_mane_aileu();
        $page['program'] = $this->Apftl_chart->get_program_aileu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/aileu', $page);
        $this->load->view('templates/footer');
    }


    public function getYearaileu()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_aileu();
        echo json_encode($totalyear);
        
    }

    public function getActaileu()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_aileu();
        echo json_encode($totalact);        
    }


    public function getCataileu()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_aileu();
        echo json_encode($totalcat);               
    }

    public function getPersenaileu()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_aileu();
        echo json_encode($totalpersen);               
    }

    public function ainaro()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Ainaro';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_ainaro();
        $page['feto'] = $this->Apftl_chart->get_feto_ainaro();
        $page['mane'] = $this->Apftl_chart->get_mane_ainaro();
        $page['program'] = $this->Apftl_chart->get_program_ainaro();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/ainaro', $page);
        $this->load->view('templates/footer');
    }


    public function getYearainaro()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_ainaro();
        echo json_encode($totalyear);
        
    }

    public function getActainaro()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_ainaro();
        echo json_encode($totalact);        
    }

    public function getCatainaro()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_ainaro();
        echo json_encode($totalcat);               
    }

    public function getPersenainaro()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_ainaro();
        echo json_encode($totalpersen);               
    }

    public function baucau()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Baucau';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_baucau();
        $page['feto'] = $this->Apftl_chart->get_feto_baucau();
        $page['mane'] = $this->Apftl_chart->get_mane_baucau();
        $page['program'] = $this->Apftl_chart->get_program_baucau();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/baucau', $page);
        $this->load->view('templates/footer');
    }


    public function getYearbaucau()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_baucau();
        echo json_encode($totalyear);
        
    }

    public function getActbaucau()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_baucau();
        echo json_encode($totalact);        
    }

    public function getCatbaucau()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_baucau();
        echo json_encode($totalcat);               
    }

    public function getPersenbaucau()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_baucau();
        echo json_encode($totalpersen);               
    }

    public function bobonaro()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Bobonaro';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_bobonaro();
        $page['feto'] = $this->Apftl_chart->get_feto_bobonaro();
        $page['mane'] = $this->Apftl_chart->get_mane_bobonaro();
        $page['program'] = $this->Apftl_chart->get_program_bobonaro();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/bobonaro', $page);
        $this->load->view('templates/footer');
    }


    public function getYearbobonaro()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_bobonaro();
        echo json_encode($totalyear);
        
    }

    public function getActbobonaro()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_bobonaro();
        echo json_encode($totalact);        
    }

    public function getCatbobonaro()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_bobonaro();
        echo json_encode($totalcat);               
    }

    public function getPersenbobonaro()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_bobonaro();
        echo json_encode($totalpersen);               
    }

    public function covalima()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Covalima';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_covalima();
        $page['feto'] = $this->Apftl_chart->get_feto_covalima();
        $page['mane'] = $this->Apftl_chart->get_mane_covalima();
        $page['program'] = $this->Apftl_chart->get_program_covalima();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/covalima', $page);
        $this->load->view('templates/footer');
    }


    public function getYearcovalima()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_covalima();
        echo json_encode($totalyear);
        
    }

    public function getActcovalima()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_covalima();
        echo json_encode($totalact);        
    }

    public function getCatcovalima()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_covalima();
        echo json_encode($totalcat);               
    }

    public function getPersencovalima()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_covalima();
        echo json_encode($totalpersen);               
    }

    public function dili()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Dili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_dili();
        $page['feto'] = $this->Apftl_chart->get_feto_dili();
        $page['mane'] = $this->Apftl_chart->get_mane_dili();
        $page['program'] = $this->Apftl_chart->get_program_dili();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dili', $page);
        $this->load->view('templates/footer');
    }


    public function getYeardili()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_dili();
        echo json_encode($totalyear);
        
    }

    public function getActdili()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_dili();
        echo json_encode($totalact); 
    }

    public function getCatdili()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_dili();
        echo json_encode($totalcat);               
    }

    public function getPersendili()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_dili();
        echo json_encode($totalpersen);               
    }

    public function ermera()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Ermera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_ermera();
        $page['feto'] = $this->Apftl_chart->get_feto_ermera();
        $page['mane'] = $this->Apftl_chart->get_mane_ermera();
        $page['program'] = $this->Apftl_chart->get_program_ermera();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/ermera', $page);
        $this->load->view('templates/footer');
    }


    public function getYearermera()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_ermera();
        echo json_encode($totalyear);
        
    }

    public function getActermera()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_ermera();
        echo json_encode($totalact); 
    }

    public function getCatermera()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_ermera();
        echo json_encode($totalcat);               
    }

    public function getPersenermera()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_ermera();
        echo json_encode($totalpersen);               
    }

    public function lautem()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Lautem';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_lautem();
        $page['feto'] = $this->Apftl_chart->get_feto_lautem();
        $page['mane'] = $this->Apftl_chart->get_mane_lautem();
        $page['program'] = $this->Apftl_chart->get_program_lautem();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/lautem', $page);
        $this->load->view('templates/footer');
    }


    public function getYearlautem()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_lautem();
        echo json_encode($totalyear);
        
    }

    public function getActlautem()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_lautem();
        echo json_encode($totalact); 
    }

    public function getCatlautem()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_lautem();
        echo json_encode($totalcat);               
    }

    public function getPersenlautem()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_lautem();
        echo json_encode($totalpersen);               
    }

    public function liquica()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Liquica';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_liquica();
        $page['feto'] = $this->Apftl_chart->get_feto_liquica();
        $page['mane'] = $this->Apftl_chart->get_mane_liquica();
        $page['program'] = $this->Apftl_chart->get_program_liquica();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/liquica', $page);
        $this->load->view('templates/footer');
    }


    public function getYearliquica()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_liquica();
        echo json_encode($totalyear);
        
    }

    public function getActliquica()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_liquica();
        echo json_encode($totalact); 
    }

    public function getCatliquica()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_liquica();
        echo json_encode($totalcat);               
    }

    public function getPersenliquica()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_liquica();
        echo json_encode($totalpersen);               
    }


    public function manufahi()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Manufahi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_manufahi();
        $page['feto'] = $this->Apftl_chart->get_feto_manufahi();
        $page['mane'] = $this->Apftl_chart->get_mane_manufahi();
        $page['program'] = $this->Apftl_chart->get_program_manufahi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/manufahi', $page);
        $this->load->view('templates/footer');
    }


    public function getYearmanufahi()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_manufahi();
        echo json_encode($totalyear);
        
    }

    public function getActmanufahi()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_manufahi();
        echo json_encode($totalact); 
    }

    public function getCatmanufahi()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_manufahi();
        echo json_encode($totalcat);               
    }

    public function getPersenmanufahi()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_manufahi();
        echo json_encode($totalpersen);               
    }

    public function manatuto()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Manatuto';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_manatuto();
        $page['feto'] = $this->Apftl_chart->get_feto_manatuto();
        $page['mane'] = $this->Apftl_chart->get_mane_manatuto();
        $page['program'] = $this->Apftl_chart->get_program_manatuto();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/manatuto', $page);
        $this->load->view('templates/footer');
    }


    public function getYearmanatuto()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_manatuto();
        echo json_encode($totalyear);
        
    }

    public function getActmanatuto()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_manatuto();
        echo json_encode($totalact); 
    }

    public function getCatmanatuto()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_manatuto();
        echo json_encode($totalcat);               
    }

    public function getPersenmanatuto()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_manatuto();
        echo json_encode($totalpersen);               
    }


        public function raeoa()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Raeoa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_raeoa();
        $page['feto'] = $this->Apftl_chart->get_feto_raeoa();
        $page['mane'] = $this->Apftl_chart->get_mane_raeoa();
        $page['program'] = $this->Apftl_chart->get_program_raeoa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/raeoa', $page);
        $this->load->view('templates/footer');
    }


    public function getYearraeoa()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_raeoa();
        echo json_encode($totalyear);
        
    }

    public function getActraeoa()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_raeoa();
        echo json_encode($totalact); 
    }

    public function getCatraeoa()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_raeoa();
        echo json_encode($totalcat);               
    }

    public function getPersenraeoa()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_raeoa();
        echo json_encode($totalpersen);               
    }

    public function viqueque()
    {
        $data['title'] = 'Beneficiariu Programa APFTL Viqueque';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Apftl_chart');
        $page['sum'] = $this->Apftl_chart->get_total_viqueque();
        $page['feto'] = $this->Apftl_chart->get_feto_viqueque();
        $page['mane'] = $this->Apftl_chart->get_mane_viqueque();
        $page['program'] = $this->Apftl_chart->get_program_viqueque();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/viqueque', $page);
        $this->load->view('templates/footer');
    }


    public function getYearviqueque()
    {
        $this->load->model('Apftl_chart');
        $totalyear = $this->Apftl_chart->get_total_year_viqueque();
        echo json_encode($totalyear);
        
    }

    public function getActviqueque()
    {
        $this->load->model('Apftl_chart');
        $totalact = $this->Apftl_chart->get_total_ack_viqueque();
        echo json_encode($totalact); 
    }

    public function getCatviqueque()
    {
        $this->load->model('Apftl_chart');
        $totalcat = $this->Apftl_chart->get_total_cat_viqueque();
        echo json_encode($totalcat);               
    }

    public function getPersenviqueque()
    {
        $this->load->model('Apftl_chart');
        $totalpersen = $this->Apftl_chart->get_total_persen_viqueque();
        echo json_encode($totalpersen);               
    }
}
