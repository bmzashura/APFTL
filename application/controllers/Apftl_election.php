<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_election extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Apftl_election_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'apftl_election/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'apftl_election/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'apftl_election/index.html';
            $config['first_url'] = base_url() . 'apftl_election/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Apftl_election_model->total_rows($q);
        $apftl_election = $this->Apftl_election_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'apftl_election_data' => $apftl_election,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('apftl_election/apftl_election_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Apftl_election_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_distric' => $row->id_distric,
		'id_subdistric' => $row->id_subdistric,
		'female_register' => $row->female_register,
		'male_register' => $row->male_register,
		'total_register' => $row->total_register,
		'female_elector' => $row->female_elector,
		'male_elector' => $row->male_elector,
		'total_elector' => $row->total_elector,
		'photo_male' => $row->photo_male,
		'name_male' => $row->name_male,
		'birth_p_male' => $row->birth_p_male,
		'birth_d_male' => $row->birth_d_male,
		'address_male' => $row->address_male,
		'mobile_male' => $row->mobile_male,
		'email_male' => $row->email_male,
		'valid_male' => $row->valid_male,
		'unvalid_male' => $row->unvalid_male,
		'photo_female' => $row->photo_female,
		'name_female' => $row->name_female,
		'birth_p_female' => $row->birth_p_female,
		'birth_d_female' => $row->birth_d_female,
		'address_female' => $row->address_female,
		'mobile_female' => $row->mobile_female,
		'email_female' => $row->email_female,
		'valid_female' => $row->valid_female,
		'unvalid_female' => $row->unvalid_female,
		'total_valid' => $row->total_valid,
		'total_unvalid' => $row->total_unvalid,
		'election_period' => $row->election_period,
	    );
            $this->load->view('apftl_election/apftl_election_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_election'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('apftl_election/create_action'),
	    'id' => set_value('id'),
	    'id_distric' => set_value('id_distric'),
	    'id_subdistric' => set_value('id_subdistric'),
	    'female_register' => set_value('female_register'),
	    'male_register' => set_value('male_register'),
	    'total_register' => set_value('total_register'),
	    'female_elector' => set_value('female_elector'),
	    'male_elector' => set_value('male_elector'),
	    'total_elector' => set_value('total_elector'),
	    'photo_male' => set_value('photo_male'),
	    'name_male' => set_value('name_male'),
	    'birth_p_male' => set_value('birth_p_male'),
	    'birth_d_male' => set_value('birth_d_male'),
	    'address_male' => set_value('address_male'),
	    'mobile_male' => set_value('mobile_male'),
	    'email_male' => set_value('email_male'),
	    'valid_male' => set_value('valid_male'),
	    'unvalid_male' => set_value('unvalid_male'),
	    'photo_female' => set_value('photo_female'),
	    'name_female' => set_value('name_female'),
	    'birth_p_female' => set_value('birth_p_female'),
	    'birth_d_female' => set_value('birth_d_female'),
	    'address_female' => set_value('address_female'),
	    'mobile_female' => set_value('mobile_female'),
	    'email_female' => set_value('email_female'),
	    'valid_female' => set_value('valid_female'),
	    'unvalid_female' => set_value('unvalid_female'),
	    'total_valid' => set_value('total_valid'),
	    'total_unvalid' => set_value('total_unvalid'),
	    'election_period' => set_value('election_period'),
	);
        $this->load->view('apftl_election/apftl_election_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_distric' => $this->input->post('id_distric',TRUE),
		'id_subdistric' => $this->input->post('id_subdistric',TRUE),
		'female_register' => $this->input->post('female_register',TRUE),
		'male_register' => $this->input->post('male_register',TRUE),
		'total_register' => $this->input->post('total_register',TRUE),
		'female_elector' => $this->input->post('female_elector',TRUE),
		'male_elector' => $this->input->post('male_elector',TRUE),
		'total_elector' => $this->input->post('total_elector',TRUE),
		'photo_male' => $this->input->post('photo_male',TRUE),
		'name_male' => $this->input->post('name_male',TRUE),
		'birth_p_male' => $this->input->post('birth_p_male',TRUE),
		'birth_d_male' => $this->input->post('birth_d_male',TRUE),
		'address_male' => $this->input->post('address_male',TRUE),
		'mobile_male' => $this->input->post('mobile_male',TRUE),
		'email_male' => $this->input->post('email_male',TRUE),
		'valid_male' => $this->input->post('valid_male',TRUE),
		'unvalid_male' => $this->input->post('unvalid_male',TRUE),
		'photo_female' => $this->input->post('photo_female',TRUE),
		'name_female' => $this->input->post('name_female',TRUE),
		'birth_p_female' => $this->input->post('birth_p_female',TRUE),
		'birth_d_female' => $this->input->post('birth_d_female',TRUE),
		'address_female' => $this->input->post('address_female',TRUE),
		'mobile_female' => $this->input->post('mobile_female',TRUE),
		'email_female' => $this->input->post('email_female',TRUE),
		'valid_female' => $this->input->post('valid_female',TRUE),
		'unvalid_female' => $this->input->post('unvalid_female',TRUE),
		'total_valid' => $this->input->post('total_valid',TRUE),
		'total_unvalid' => $this->input->post('total_unvalid',TRUE),
		'election_period' => $this->input->post('election_period',TRUE),
	    );

            $this->Apftl_election_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('apftl_election'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Apftl_election_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('apftl_election/update_action'),
		'id' => set_value('id', $row->id),
		'id_distric' => set_value('id_distric', $row->id_distric),
		'id_subdistric' => set_value('id_subdistric', $row->id_subdistric),
		'female_register' => set_value('female_register', $row->female_register),
		'male_register' => set_value('male_register', $row->male_register),
		'total_register' => set_value('total_register', $row->total_register),
		'female_elector' => set_value('female_elector', $row->female_elector),
		'male_elector' => set_value('male_elector', $row->male_elector),
		'total_elector' => set_value('total_elector', $row->total_elector),
		'photo_male' => set_value('photo_male', $row->photo_male),
		'name_male' => set_value('name_male', $row->name_male),
		'birth_p_male' => set_value('birth_p_male', $row->birth_p_male),
		'birth_d_male' => set_value('birth_d_male', $row->birth_d_male),
		'address_male' => set_value('address_male', $row->address_male),
		'mobile_male' => set_value('mobile_male', $row->mobile_male),
		'email_male' => set_value('email_male', $row->email_male),
		'valid_male' => set_value('valid_male', $row->valid_male),
		'unvalid_male' => set_value('unvalid_male', $row->unvalid_male),
		'photo_female' => set_value('photo_female', $row->photo_female),
		'name_female' => set_value('name_female', $row->name_female),
		'birth_p_female' => set_value('birth_p_female', $row->birth_p_female),
		'birth_d_female' => set_value('birth_d_female', $row->birth_d_female),
		'address_female' => set_value('address_female', $row->address_female),
		'mobile_female' => set_value('mobile_female', $row->mobile_female),
		'email_female' => set_value('email_female', $row->email_female),
		'valid_female' => set_value('valid_female', $row->valid_female),
		'unvalid_female' => set_value('unvalid_female', $row->unvalid_female),
		'total_valid' => set_value('total_valid', $row->total_valid),
		'total_unvalid' => set_value('total_unvalid', $row->total_unvalid),
		'election_period' => set_value('election_period', $row->election_period),
	    );
            $this->load->view('apftl_election/apftl_election_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_election'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_distric' => $this->input->post('id_distric',TRUE),
		'id_subdistric' => $this->input->post('id_subdistric',TRUE),
		'female_register' => $this->input->post('female_register',TRUE),
		'male_register' => $this->input->post('male_register',TRUE),
		'total_register' => $this->input->post('total_register',TRUE),
		'female_elector' => $this->input->post('female_elector',TRUE),
		'male_elector' => $this->input->post('male_elector',TRUE),
		'total_elector' => $this->input->post('total_elector',TRUE),
		'photo_male' => $this->input->post('photo_male',TRUE),
		'name_male' => $this->input->post('name_male',TRUE),
		'birth_p_male' => $this->input->post('birth_p_male',TRUE),
		'birth_d_male' => $this->input->post('birth_d_male',TRUE),
		'address_male' => $this->input->post('address_male',TRUE),
		'mobile_male' => $this->input->post('mobile_male',TRUE),
		'email_male' => $this->input->post('email_male',TRUE),
		'valid_male' => $this->input->post('valid_male',TRUE),
		'unvalid_male' => $this->input->post('unvalid_male',TRUE),
		'photo_female' => $this->input->post('photo_female',TRUE),
		'name_female' => $this->input->post('name_female',TRUE),
		'birth_p_female' => $this->input->post('birth_p_female',TRUE),
		'birth_d_female' => $this->input->post('birth_d_female',TRUE),
		'address_female' => $this->input->post('address_female',TRUE),
		'mobile_female' => $this->input->post('mobile_female',TRUE),
		'email_female' => $this->input->post('email_female',TRUE),
		'valid_female' => $this->input->post('valid_female',TRUE),
		'unvalid_female' => $this->input->post('unvalid_female',TRUE),
		'total_valid' => $this->input->post('total_valid',TRUE),
		'total_unvalid' => $this->input->post('total_unvalid',TRUE),
		'election_period' => $this->input->post('election_period',TRUE),
	    );

            $this->Apftl_election_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('apftl_election'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Apftl_election_model->get_by_id($id);

        if ($row) {
            $this->Apftl_election_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('apftl_election'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('apftl_election'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_distric', 'id distric', 'trim|required');
	$this->form_validation->set_rules('id_subdistric', 'id subdistric', 'trim|required');
	$this->form_validation->set_rules('female_register', 'female register', 'trim|required');
	$this->form_validation->set_rules('male_register', 'male register', 'trim|required');
	$this->form_validation->set_rules('total_register', 'total register', 'trim|required');
	$this->form_validation->set_rules('female_elector', 'female elector', 'trim|required');
	$this->form_validation->set_rules('male_elector', 'male elector', 'trim|required');
	$this->form_validation->set_rules('total_elector', 'total elector', 'trim|required');
	$this->form_validation->set_rules('photo_male', 'photo male', 'trim|required');
	$this->form_validation->set_rules('name_male', 'name male', 'trim|required');
	$this->form_validation->set_rules('birth_p_male', 'birth p male', 'trim|required');
	$this->form_validation->set_rules('birth_d_male', 'birth d male', 'trim|required');
	$this->form_validation->set_rules('address_male', 'address male', 'trim|required');
	$this->form_validation->set_rules('mobile_male', 'mobile male', 'trim|required');
	$this->form_validation->set_rules('email_male', 'email male', 'trim|required');
	$this->form_validation->set_rules('valid_male', 'valid male', 'trim|required');
	$this->form_validation->set_rules('unvalid_male', 'unvalid male', 'trim|required');
	$this->form_validation->set_rules('photo_female', 'photo female', 'trim|required');
	$this->form_validation->set_rules('name_female', 'name female', 'trim|required');
	$this->form_validation->set_rules('birth_p_female', 'birth p female', 'trim|required');
	$this->form_validation->set_rules('birth_d_female', 'birth d female', 'trim|required');
	$this->form_validation->set_rules('address_female', 'address female', 'trim|required');
	$this->form_validation->set_rules('mobile_female', 'mobile female', 'trim|required');
	$this->form_validation->set_rules('email_female', 'email female', 'trim|required');
	$this->form_validation->set_rules('valid_female', 'valid female', 'trim|required');
	$this->form_validation->set_rules('unvalid_female', 'unvalid female', 'trim|required');
	$this->form_validation->set_rules('total_valid', 'total valid', 'trim|required');
	$this->form_validation->set_rules('total_unvalid', 'total unvalid', 'trim|required');
	$this->form_validation->set_rules('election_period', 'election period', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Apftl_election.php */
/* Location: ./application/controllers/Apftl_election.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-04 18:23:37 */
/* http://harviacode.com */