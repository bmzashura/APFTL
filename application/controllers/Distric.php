<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Distric extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Distric_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'distric/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'distric/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'distric/index.html';
            $config['first_url'] = base_url() . 'distric/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Distric_model->total_rows($q);
        $distric = $this->Distric_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = array(
            'distric_data' => $distric,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('distric/distric_list', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Distric_model->get_by_id($id);
        if ($row) {
            $page = array(
                'id' => $row->id,
                'distric' => $row->distric,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('distric/distric_read', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('distric'));
        }
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $page = array(
            'button' => 'Create',
            'action' => site_url('distric/create_action'),
            'id' => set_value('id'),
            'distric' => set_value('distric'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('distric/distric_form', $page);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'distric' => $this->input->post('distric', TRUE),
            );

            $this->Distric_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('distric'));
        }
    }

    public function update($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Distric_model->get_by_id($id);

        if ($row) {
            $page = array(
                'button' => 'Update',
                'action' => site_url('distric/update_action'),
                'id' => set_value('id', $row->id),
                'distric' => set_value('distric', $row->distric),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('distric/distric_form', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('distric'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'distric' => $this->input->post('distric', TRUE),
            );

            $this->Distric_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('distric'));
        }
    }

    public function delete($id)
    {
        $row = $this->Distric_model->get_by_id($id);

        if ($row) {
            $this->Distric_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('distric'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('distric'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('distric', 'distric', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
