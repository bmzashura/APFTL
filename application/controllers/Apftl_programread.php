<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_programread extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Apftl_program_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Program | APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_programread/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_programread/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_programread/index.html';
            $config['first_url'] = base_url() . 'apftl_programread/index.html';
        }

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');

        $config['per_page'] = 5;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Apftl_program_model->total_rows($q);
        $apftl_program = $this->Apftl_program_model->get_all($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = array(
            'apftl_program_data' => $apftl_program,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_program/apftl_program_listuser', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
        $data['title'] = 'Program | APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_program_model->get_by_id($id);
        if ($row) {
            $page = array(
                'id' => $row->id,
                'category' => $row->category,
                'activity' => $row->activity,
                'partner' => $row->partner,
                'date' => $row->date,
                'distric' => $row->distric,
                'description' => $row->description,
                'objective' => $row->objective,
                'participant_m' => $row->participant_m,
                'participant_f' => $row->participant_f,
                'participant_sum' => $row->participant_sum,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_program/apftl_program_readuser', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_programread'));
        }
    }

}
