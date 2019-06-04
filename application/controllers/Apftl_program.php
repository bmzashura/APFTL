<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_program extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Apftl_program_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_program/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_program/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_program/index.html';
            $config['first_url'] = base_url() . 'apftl_program/index.html';
        }

        $config['per_page'] = 10;
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
        $this->load->view('apftl_program/apftl_program_list', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
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
            $this->load->view('apftl_program/apftl_program_read', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_program'));
        }
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $page = array(
            'button' => 'Create',
            'action' => site_url('apftl_program/create_action'),
            'id' => set_value('id'),
            'id_category' => set_value('id_category'),
            'id_activity' => set_value('id_activity'),
            'id_partner' => set_value('id_partner'),
            'date' => set_value('date'),
            'id_distric' => set_value('id_distric'),
            'description' => set_value('description'),
            'objective' => set_value('objective'),
            'participant_m' => set_value('participant_m'),
            'participant_f' => set_value('participant_f'),
            'participant_sum' => set_value('participant_sum'),
            'program_category' => $this->db->get('apftl_c_program')->result(),
            'distric' => $this->db->get('distric')->result(),
            'partner' => $this->db->get('apftl_partner')->result(),
            'activity' => $this->db->get('apftl_activity')->result()
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_program/apftl_program_form', $page);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'id_category' => $this->input->post('id_category', TRUE),
                'id_activity' => $this->input->post('id_activity', TRUE),
                'id_partner' => $this->input->post('id_partner', TRUE),
                'date' => $this->input->post('date', TRUE),
                'id_distric' => $this->input->post('id_distric', TRUE),
                'description' => $this->input->post('description', TRUE),
                'objective' => $this->input->post('objective', TRUE),
                'participant_m' => $this->input->post('participant_m', TRUE),
                'participant_f' => $this->input->post('participant_f', TRUE),
                'participant_sum' => $this->input->post('participant_sum', TRUE),
            );

            $this->Apftl_program_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('apftl_program'));
        }
    }

    public function update($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_program_model->get_by_id($id);

        if ($row) {
            $page = array(
                'button' => 'Update',
                'action' => site_url('apftl_program/update_action'),
                'id' => set_value('id', $row->id),
                'id_category' => set_value('id_category', $row->id_category),
                'id_activity' => set_value('id_activity', $row->id_activity),
                'id_partner' => set_value('id_partner', $row->id_partner),
                'date' => set_value('date', $row->date),
                'id_distric' => set_value('id_distric', $row->id_distric),
                'description' => set_value('description', $row->description),
                'objective' => set_value('objective', $row->objective),
                'participant_m' => set_value('participant_m', $row->participant_m),
                'participant_f' => set_value('participant_f', $row->participant_f),
                'participant_sum' => set_value('participant_sum', $row->participant_sum),
                'program_category' => $this->db->get('apftl_c_program')->result(),
                'distric' => $this->db->get('distric')->result(),
                'partner' => $this->db->get('apftl_partner')->result(),
                'activity' => $this->db->get('apftl_activity')->result()
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_program/apftl_program_form', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_program'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'id_category' => $this->input->post('id_category', TRUE),
                'id_activity' => $this->input->post('id_activity', TRUE),
                'id_partner' => $this->input->post('id_partner', TRUE),
                'date' => $this->input->post('date', TRUE),
                'id_distric' => $this->input->post('id_distric', TRUE),
                'description' => $this->input->post('description', TRUE),
                'objective' => $this->input->post('objective', TRUE),
                'participant_m' => $this->input->post('participant_m', TRUE),
                'participant_f' => $this->input->post('participant_f', TRUE),
                'participant_sum' => $this->input->post('participant_sum', TRUE),
            );

            $this->Apftl_program_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('apftl_program'));
        }
    }

    public function delete($id)
    {
        $row = $this->Apftl_program_model->get_by_id($id);

        if ($row) {
            $this->Apftl_program_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('apftl_program'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_program'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_category', 'id category', 'trim|required');
        $this->form_validation->set_rules('id_activity', 'id_activity', 'trim|required');
        $this->form_validation->set_rules('id_partner', 'id partner', 'trim|required');
        $this->form_validation->set_rules('date', 'date', 'trim|required');
        $this->form_validation->set_rules('id_distric', 'id distric', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('objective', 'objective', 'trim|required');
        $this->form_validation->set_rules('participant_m', 'participant m', 'trim|required');
        $this->form_validation->set_rules('participant_f', 'participant f', 'trim|required');
        $this->form_validation->set_rules('participant_sum', 'participant sum', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
