<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_c_program extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Apftl_c_program_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Program Category |  APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_c_program/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_c_program/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_c_program/index.html';
            $config['first_url'] = base_url() . 'apftl_c_program/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Apftl_c_program_model->total_rows($q);
        $apftl_c_program = $this->Apftl_c_program_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = array(
            'apftl_c_program_data' => $apftl_c_program,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_c_program/apftl_c_program_list', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
        $data['title'] = 'Program Category |  APFTL';
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_c_program_model->get_by_id($id);
        if ($row) {
            $page = array(
                'id' => $row->id,
                'category' => $row->category,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_c_program/apftl_c_program_read', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_c_program'));
        }
    }

    public function create()
    {
        $data['title'] = 'Add Program Category |  APFTL';
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $page = array(
            'button' => 'Create',
            'action' => site_url('apftl_c_program/create_action'),
            'id' => set_value('id'),
            'category' => set_value('category'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_c_program/apftl_c_program_form', $page);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'category' => $this->input->post('category', TRUE),
            );

            $this->Apftl_c_program_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('apftl_c_program'));
        }
    }

    public function update($id)
    {
        $data['title'] = 'Edit Program Category |  APFTL';
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_c_program_model->get_by_id($id);

        if ($row) {
            $page = array(
                'button' => 'Update',
                'action' => site_url('apftl_c_program/update_action'),
                'id' => set_value('id', $row->id),
                'category' => set_value('category', $row->category),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_c_program/apftl_c_program_form', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_c_program'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'category' => $this->input->post('category', TRUE),
            );

            $this->Apftl_c_program_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('apftl_c_program'));
        }
    }

    public function delete($id)
    {
        $row = $this->Apftl_c_program_model->get_by_id($id);

        if ($row) {
            $this->Apftl_c_program_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('apftl_c_program'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_c_program'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('category', 'category', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
