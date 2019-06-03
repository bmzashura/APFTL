<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Apftl_member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_member/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_member/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_member/index.html';
            $config['first_url'] = base_url() . 'apftl_member/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Apftl_member_model->total_rows($q);
        $apftl_member = $this->Apftl_member_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = array(
            'apftl_member_data' => $apftl_member,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_member/apftl_member_list', $page);
        $this->load->view('templates/footer');
    }

    public function read($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_member_model->get_by_id($id);
        if ($row) {
            $page = array(
                'id' => $row->id,
                'photo' => $row->photo,
                'f_name' => $row->f_name,
                'l_name' => $row->l_name,
                'gender' => $row->gender,
                'status' => $row->status,
                'birth_p' => $row->birth_p,
                'birth_d' => $row->birth_d,
                'address' => $row->address,
                'email' => $row->email,
                'phone_n' => $row->phone_n,
                'periodu' => $row->periodu,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_member/apftl_member_read', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_member'));
        }
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $page = array(
            'button' => 'Create',
            'action' => site_url('apftl_member/create_action'),
            'id' => set_value('id'),
            'photo' => set_value('photo'),
            'f_name' => set_value('f_name'),
            'l_name' => set_value('l_name'),
            'gender' => set_value('gender'),
            'status' => set_value('status'),
            'birth_p' => set_value('birth_p'),
            'birth_d' => set_value('birth_d'),
            'address' => set_value('address'),
            'email' => set_value('email'),
            'phone_n' => set_value('phone_n'),
            'periodu' => set_value('periodu'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apftl_member/apftl_member_form', $page);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $general = array(
                'photo' => $this->input->post('photo', TRUE),
                'f_name' => $this->input->post('f_name', TRUE),
                'l_name' => $this->input->post('l_name', TRUE),
                'gender' => $this->input->post('gender', TRUE),
                'status' => $this->input->post('status', TRUE),
                'birth_p' => $this->input->post('birth_p', TRUE),
                'birth_d' => $this->input->post('birth_d', TRUE),
                'address' => $this->input->post('address', TRUE),
                'email' => $this->input->post('email', TRUE),
                'phone_n' => $this->input->post('phone_n', TRUE),
                'periodu' => $this->input->post('periodu', TRUE),
            );

            $this->Apftl_member_model->insert($general);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('apftl_member'));
        }
    }

    public function update($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('apftl_menu')->result_array();
        $row = $this->Apftl_member_model->get_by_id($id);

        if ($row) {
            $page = array(
                'button' => 'Update',
                'action' => site_url('apftl_member/update_action'),
                'id' => set_value('id', $row->id),
                'photo' => set_value('photo', $row->photo),
                'f_name' => set_value('f_name', $row->f_name),
                'l_name' => set_value('l_name', $row->l_name),
                'gender' => set_value('gender', $row->gender),
                'status' => set_value('status', $row->status),
                'birth_p' => set_value('birth_p', $row->birth_p),
                'birth_d' => set_value('birth_d', $row->birth_d),
                'address' => set_value('address', $row->address),
                'email' => set_value('email', $row->email),
                'phone_n' => set_value('phone_n', $row->phone_n),
                'periodu' => set_value('periodu', $row->periodu),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apftl_member/apftl_member_form', $page);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_member'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'photo' => $this->input->post('photo', TRUE),
                'f_name' => $this->input->post('f_name', TRUE),
                'l_name' => $this->input->post('l_name', TRUE),
                'gender' => $this->input->post('gender', TRUE),
                'status' => $this->input->post('status', TRUE),
                'birth_p' => $this->input->post('birth_p', TRUE),
                'birth_d' => $this->input->post('birth_d', TRUE),
                'address' => $this->input->post('address', TRUE),
                'email' => $this->input->post('email', TRUE),
                'phone_n' => $this->input->post('phone_n', TRUE),
                'periodu' => $this->input->post('periodu', TRUE),
            );

            $this->Apftl_member_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('apftl_member'));
        }
    }

    public function delete($id)
    {
        $row = $this->Apftl_member_model->get_by_id($id);

        if ($row) {
            $this->Apftl_member_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('apftl_member'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_member'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('photo', 'photo', 'trim|required');
        $this->form_validation->set_rules('f_name', 'f name', 'trim|required');
        $this->form_validation->set_rules('l_name', 'l name', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('birth_p', 'birth p', 'trim|required');
        $this->form_validation->set_rules('birth_d', 'birth d', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('phone_n', 'phone n', 'trim|required');
        $this->form_validation->set_rules('periodu', 'periodu', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
