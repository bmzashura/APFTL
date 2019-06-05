<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_activity extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Apftl_activity_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Activity |  APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_activity/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_activity/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_activity/index.html';
            $config['first_url'] = base_url() . 'apftl_activity/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Apftl_activity_model->total_rows($q);
        $apftl_activity = $this->Apftl_activity_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = array(
            'apftl_activity_data' => $apftl_activity,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_activity/apftl_activity_list', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
        $data['title'] = 'Activity |  APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_activity_model->get_by_id($id);
        if ($row) {
            $page = array(
                'id' => $row->id,
                'activity' => $row->activity,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_activity/apftl_activity_read', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_activity'));
        }
    }

    public function create()
    {
        $data['title'] = 'Add Activity |  APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $page = array(
            'button' => 'Create',
            'action' => site_url('apftl_activity/create_action'),
            'id' => set_value('id'),
            'activity' => set_value('activity'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_activity/apftl_activity_form', $page);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'activity' => $this->input->post('activity', TRUE),
            );

            $this->Apftl_activity_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('apftl_activity'));
        }
    }

    public function update($id)
    {
        $data['title'] = 'Edit Activity |  APFTL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_activity_model->get_by_id($id);

        if ($row) {
            $page = array(
                'button' => 'Update',
                'action' => site_url('apftl_activity/update_action'),
                'id' => set_value('id', $row->id),
                'activity' => set_value('activity', $row->activity),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_activity/apftl_activity_form', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_activity'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'activity' => $this->input->post('activity', TRUE),
            );

            $this->Apftl_activity_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('apftl_activity'));
        }
    }

    public function delete($id)
    {
        $row = $this->Apftl_activity_model->get_by_id($id);

        if ($row) {
            $this->Apftl_activity_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('apftl_activity'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_activity'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('activity', 'activity', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
