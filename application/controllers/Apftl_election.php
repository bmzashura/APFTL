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
		$data['title'] = 'Election |  APFTL';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('apftl_menu')->result_array();
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
		$apftl_election = $this->Apftl_election_model->get_all($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$page = array(
			'apftl_election_data' => $apftl_election,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('apftl_election/apftl_election_list', $page);
		$this->load->view('templates/footer');
	}

	public function read($id)
	{
		$data['title'] = 'Election |  APFTL';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('apftl_menu')->result_array();
		$row = $this->Apftl_election_model->get_by_id($id);
		if ($row) {
			$page = array(
				'id' => $row->id,
				'distric' => $row->distric,
				'subdistric' => $row->subdistric,
				'election_period' => $row->election_period,
				'female_register' => $row->female_register,
				'male_register' => $row->male_register,
				'total_register' => $row->total_register,
				'female_selected' => $row->female_selected,
				'male_selected' => $row->male_selected,
				'total_selected' => $row->total_selected,
				'female_candidate' => $row->female_candidate,
				'male_candidate' => $row->male_candidate,
				'total_candidate' => $row->total_candidate,
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
			);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('apftl_election/apftl_election_read', $page);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('apftl_election'));
		}
	}

	public function create()
	{
		$data['title'] = 'Election |  APFTL';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('apftl_menu')->result_array();
		$page = array(
			'button' => 'Create',
			'action' => site_url('apftl_election/create_action'),
			'id' => set_value('id'),
			'id_distric' => set_value('id_distric'),
			'id_subdistric' => set_value('id_subdistric'),
			'election_period' => set_value('election_period'),
			'female_register' => set_value('female_register'),
			'male_register' => set_value('male_register'),
			'total_register' => set_value('total_register'),
			'female_selected' => set_value('female_selected'),
			'male_selected' => set_value('male_selected'),
			'total_selected' => set_value('total_selected'),
			'female_candidate' => set_value('female_candidate'),
			'male_candidate' => set_value('male_candidate'),
			'total_candidate' => set_value('total_candidate'),
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
		);
		$page['distric'] = $this->Apftl_election_model->get_distric_query();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('apftl_election/apftl_election_form', $page);
		$this->load->view('templates/footer');
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'id_distric' => $this->input->post('id_distric', TRUE),
				'id_subdistric' => $this->input->post('id_subdistric', TRUE),
				'election_period' => $this->input->post('election_period', TRUE),
				'female_register' => $this->input->post('female_register', TRUE),
				'male_register' => $this->input->post('male_register', TRUE),
				'total_register' => $this->input->post('total_register', TRUE),
				'female_selected' => $this->input->post('female_selected', TRUE),
				'male_selected' => $this->input->post('male_selected', TRUE),
				'total_selected' => $this->input->post('total_selected', TRUE),
				'female_candidate' => $this->input->post('female_candidate', TRUE),
				'male_candidate' => $this->input->post('male_candidate', TRUE),
				'total_candidate' => $this->input->post('total_candidate', TRUE),

				'name_male' => $this->input->post('name_male', TRUE),
				'birth_p_male' => $this->input->post('birth_p_male', TRUE),
				'birth_d_male' => $this->input->post('birth_d_male', TRUE),
				'address_male' => $this->input->post('address_male', TRUE),
				'mobile_male' => $this->input->post('mobile_male', TRUE),
				'email_male' => $this->input->post('email_male', TRUE),
				'valid_male' => $this->input->post('valid_male', TRUE),
				'unvalid_male' => $this->input->post('unvalid_male', TRUE),

				'name_female' => $this->input->post('name_female', TRUE),
				'birth_p_female' => $this->input->post('birth_p_female', TRUE),
				'birth_d_female' => $this->input->post('birth_d_female', TRUE),
				'address_female' => $this->input->post('address_female', TRUE),
				'mobile_female' => $this->input->post('mobile_female', TRUE),
				'email_female' => $this->input->post('email_female', TRUE),
				'valid_female' => $this->input->post('valid_female', TRUE),
				'unvalid_female' => $this->input->post('unvalid_female', TRUE),
				'total_valid' => $this->input->post('total_valid', TRUE),
				'total_unvalid' => $this->input->post('total_unvalid', TRUE),
			);

			$upload_image_mane = $_FILES['photo_male']['name'];
			if ($upload_image_mane) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path'] = './assets/img/profile/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo_male')) {
					$old_image = $data['photo_male'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('photo_male', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}
			$upload_image_feto = $_FILES['photo_female']['name'];
			if ($upload_image_feto) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path'] = './assets/img/profile/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo_female')) {
					$old_image = $data['photo_female'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('photo_female', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}

			$this->Apftl_election_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('apftl_election'));
		}
	}

	public function update($id)
	{
		$data['title'] = 'Election |  APFTL';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('apftl_menu')->result_array();
		$row = $this->Apftl_election_model->get_by_id($id);

		if ($row) {
			$page = array(
				'button' => 'Update',
				'action' => site_url('apftl_election/update_action'),
				'id' => set_value('id', $row->id),
				'id_distric' => set_value('id_distric', $row->id_distric),
				'id_subdistric' => set_value('id_subdistric', $row->id_subdistric),
				'election_period' => set_value('election_period', $row->election_period),
				'female_register' => set_value('female_register', $row->female_register),
				'male_register' => set_value('male_register', $row->male_register),
				'total_register' => set_value('total_register', $row->total_register),
				'female_selected' => set_value('female_selected', $row->female_selected),
				'male_selected' => set_value('male_selected', $row->male_selected),
				'total_selected' => set_value('total_selected', $row->total_selected),
				'female_candidate' => set_value('female_candidate', $row->female_candidate),
				'male_candidate' => set_value('male_candidate', $row->male_candidate),
				'total_candidate' => set_value('total_candidate', $row->total_candidate),
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
			);
			$page['distric'] = $this->Apftl_election_model->get_distric_query();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('apftl_election/apftl_election_form', $page);
			$this->load->view('templates/footer');
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
				'id_distric' => $this->input->post('id_distric', TRUE),
				'id_subdistric' => $this->input->post('id_subdistric', TRUE),
				'election_period' => $this->input->post('election_period', TRUE),
				'female_register' => $this->input->post('female_register', TRUE),
				'male_register' => $this->input->post('male_register', TRUE),
				'total_register' => $this->input->post('total_register', TRUE),
				'female_selected' => $this->input->post('female_selected', TRUE),
				'male_selected' => $this->input->post('male_selected', TRUE),
				'total_selected' => $this->input->post('total_selected', TRUE),
				'female_candidate' => $this->input->post('female_candidate', TRUE),
				'male_candidate' => $this->input->post('male_candidate', TRUE),
				'total_candidate' => $this->input->post('total_candidate', TRUE),

				'name_male' => $this->input->post('name_male', TRUE),
				'birth_p_male' => $this->input->post('birth_p_male', TRUE),
				'birth_d_male' => $this->input->post('birth_d_male', TRUE),
				'address_male' => $this->input->post('address_male', TRUE),
				'mobile_male' => $this->input->post('mobile_male', TRUE),
				'email_male' => $this->input->post('email_male', TRUE),
				'valid_male' => $this->input->post('valid_male', TRUE),
				'unvalid_male' => $this->input->post('unvalid_male', TRUE),

				'name_female' => $this->input->post('name_female', TRUE),
				'birth_p_female' => $this->input->post('birth_p_female', TRUE),
				'birth_d_female' => $this->input->post('birth_d_female', TRUE),
				'address_female' => $this->input->post('address_female', TRUE),
				'mobile_female' => $this->input->post('mobile_female', TRUE),
				'email_female' => $this->input->post('email_female', TRUE),
				'valid_female' => $this->input->post('valid_female', TRUE),
				'unvalid_female' => $this->input->post('unvalid_female', TRUE),
				'total_valid' => $this->input->post('total_valid', TRUE),
				'total_unvalid' => $this->input->post('total_unvalid', TRUE),
			);


			$upload_image_mane = $_FILES['photo_male']['name'];
			if ($upload_image_mane) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path'] = './assets/img/profile/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo_male')) {
					$old_image = $data['photo_male'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('photo_male', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}
			$upload_image_feto = $_FILES['photo_female']['name'];
			if ($upload_image_feto) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path'] = './assets/img/profile/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo_female')) {
					$old_image = $data['photo_female'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('photo_female', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}

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
		$this->form_validation->set_rules('election_period', 'election period', 'trim|required');
		$this->form_validation->set_rules('female_register', 'female register', 'trim|required');
		$this->form_validation->set_rules('male_register', 'male register', 'trim|required');
		$this->form_validation->set_rules('total_register', 'total register', 'trim|required');
		$this->form_validation->set_rules('female_selected', 'female selected', 'trim|required');
		$this->form_validation->set_rules('male_selected', 'male selected', 'trim|required');
		$this->form_validation->set_rules('total_selected', 'total selected', 'trim|required');
		$this->form_validation->set_rules('female_candidate', 'female candidate', 'trim|required');
		$this->form_validation->set_rules('male_candidate', 'male candidate', 'trim|required');
		$this->form_validation->set_rules('total_candidate', 'total candidate', 'trim|required');

		$this->form_validation->set_rules('name_male', 'name male', 'trim|required');
		$this->form_validation->set_rules('birth_p_male', 'birth p male', 'trim|required');
		$this->form_validation->set_rules('birth_d_male', 'birth d male', 'trim|required');
		$this->form_validation->set_rules('address_male', 'address male', 'trim|required');
		$this->form_validation->set_rules('mobile_male', 'mobile male', 'trim|required');
		$this->form_validation->set_rules('email_male', 'email male', 'trim|required');
		$this->form_validation->set_rules('valid_male', 'valid male', 'trim|required');
		$this->form_validation->set_rules('unvalid_male', 'unvalid male', 'trim|required');

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

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function get_subdistric()
	{
		$id = $this->input->post('id_distric');
		$subdistric = $this->Apftl_election_model->get_subdistric_query($id);
		if (count($subdistric) > 0) {
			$pro_select_box = '';
			$pro_select_box .= '<option value="">--select--</option>';
			foreach ($subdistric as $sd) {
				$pro_select_box .= '<option value="' . $sd->id . '">' . $sd->subdistric . '</option>';
			}
			echo json_encode($pro_select_box);
			//print_r($cek);
			//exit();
		}
	}
}
