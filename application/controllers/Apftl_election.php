<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Apftl_election extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
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
		$this->load->view('templates/topbar_elisaun', $data);
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
				'name_male' => $row->name_male,
				'edu_male' => $row->edu_male,
				'birth_p_male' => $row->birth_p_male,
				'birth_d_male' => $row->birth_d_male,
				'address_male' => $row->address_male,
				'mobile_male' => $row->mobile_male,
				'email_male' => $row->email_male,
				'name_female' => $row->name_female,
				'edu_female' => $row->edu_female,
				'birth_p_female' => $row->birth_p_female,
				'birth_d_female' => $row->birth_d_female,
				'address_female' => $row->address_female,
				'mobile_female' => $row->mobile_female,
				'email_female' => $row->email_female,
			);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar_elisaun', $data);
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
			'name_male' => set_value('name_male'),
			'edu_male' => set_value('edu_male'),
			'birth_p_male' => set_value('birth_p_male'),
			'birth_d_male' => set_value('birth_d_male'),
			'address_male' => set_value('address_male'),
			'mobile_male' => set_value('mobile_male'),
			'email_male' => set_value('email_male'),
			'name_female' => set_value('name_female'),
			'edu_female' => set_value('edu_female'),
			'birth_p_female' => set_value('birth_p_female'),
			'birth_d_female' => set_value('birth_d_female'),
			'address_female' => set_value('address_female'),
			'mobile_female' => set_value('mobile_female'),
			'email_female' => set_value('email_female'),
		);
		$page['distric'] = $this->Apftl_election_model->get_distric_query();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar_elisaun', $data);
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
				'edu_male' => $this->input->post('edu_male', TRUE),
				'birth_p_male' => $this->input->post('birth_p_male', TRUE),
				'birth_d_male' => $this->input->post('birth_d_male', TRUE),
				'address_male' => $this->input->post('address_male', TRUE),
				'mobile_male' => $this->input->post('mobile_male', TRUE),
				'email_male' => $this->input->post('email_male', TRUE),
				'name_female' => $this->input->post('name_female', TRUE),
				'edu_female' => $this->input->post('edu_female', TRUE),
				'birth_p_female' => $this->input->post('birth_p_female', TRUE),
				'birth_d_female' => $this->input->post('birth_d_female', TRUE),
				'address_female' => $this->input->post('address_female', TRUE),
				'mobile_female' => $this->input->post('mobile_female', TRUE),
				'email_female' => $this->input->post('email_female', TRUE),

			);

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
				'name_male' => set_value('name_male', $row->name_male),
				'edu_male' => set_value('edu_male', $row->edu_male),
				'birth_p_male' => set_value('birth_p_male', $row->birth_p_male),
				'birth_d_male' => set_value('birth_d_male', $row->birth_d_male),
				'address_male' => set_value('address_male', $row->address_male),
				'mobile_male' => set_value('mobile_male', $row->mobile_male),
				'email_male' => set_value('email_male', $row->email_male),
				'name_female' => set_value('name_female', $row->name_female),
				'edu_female' => set_value('edu_female', $row->edu_female),
				'birth_p_female' => set_value('birth_p_female', $row->birth_p_female),
				'birth_d_female' => set_value('birth_d_female', $row->birth_d_female),
				'address_female' => set_value('address_female', $row->address_female),
				'mobile_female' => set_value('mobile_female', $row->mobile_female),
				'email_female' => set_value('email_female', $row->email_female),
			);
			$page['distric'] = $this->Apftl_election_model->get_distric_query();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar_elisaun', $data);
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
				'edu_male' => $this->input->post('edu_male', TRUE),
				'birth_p_male' => $this->input->post('birth_p_male', TRUE),
				'birth_d_male' => $this->input->post('birth_d_male', TRUE),
				'address_male' => $this->input->post('address_male', TRUE),
				'mobile_male' => $this->input->post('mobile_male', TRUE),
				'email_male' => $this->input->post('email_male', TRUE),
				'name_female' => $this->input->post('name_female', TRUE),
				'edu_female' => $this->input->post('edu_female', TRUE),
				'birth_p_female' => $this->input->post('birth_p_female', TRUE),
				'birth_d_female' => $this->input->post('birth_d_female', TRUE),
				'address_female' => $this->input->post('address_female', TRUE),
				'mobile_female' => $this->input->post('mobile_female', TRUE),
				'email_female' => $this->input->post('email_female', TRUE),
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
		$this->form_validation->set_rules('id_distric', 'id distric', 'trim');
		$this->form_validation->set_rules('id_subdistric', 'id subdistric', 'trim');
		$this->form_validation->set_rules('election_period', 'election period', 'trim');
		$this->form_validation->set_rules('female_register', 'female register', 'trim');
		$this->form_validation->set_rules('male_register', 'male register', 'trim');
		$this->form_validation->set_rules('total_register', 'total register', 'trim');
		$this->form_validation->set_rules('female_selected', 'female selected', 'trim');
		$this->form_validation->set_rules('male_selected', 'male selected', 'trim');
		$this->form_validation->set_rules('total_selected', 'total selected', 'trim');
		$this->form_validation->set_rules('female_candidate', 'female candidate', 'trim');
		$this->form_validation->set_rules('male_candidate', 'male candidate', 'trim');
		$this->form_validation->set_rules('total_candidate', 'total candidate', 'trim');
		$this->form_validation->set_rules('name_male', 'name male', 'trim');
		$this->form_validation->set_rules('edu_male', 'edu male', 'trim');
		$this->form_validation->set_rules('birth_p_male', 'birth p male', 'trim');
		$this->form_validation->set_rules('birth_d_male', 'birth d male', 'trim');
		$this->form_validation->set_rules('address_male', 'address male', 'trim');
		$this->form_validation->set_rules('mobile_male', 'mobile male', 'trim');
		$this->form_validation->set_rules('email_male', 'email male', 'trim');
		$this->form_validation->set_rules('valid_male', 'valid male', 'trim');
		$this->form_validation->set_rules('unvalid_male', 'unvalid male', 'trim');
		$this->form_validation->set_rules('name_female', 'name female', 'trim');
		$this->form_validation->set_rules('edu_female', 'edu female', 'trim');
		$this->form_validation->set_rules('birth_p_female', 'birth p female', 'trim');
		$this->form_validation->set_rules('birth_d_female', 'birth d female', 'trim');
		$this->form_validation->set_rules('address_female', 'address female', 'trim');
		$this->form_validation->set_rules('mobile_female', 'mobile female', 'trim');
		$this->form_validation->set_rules('email_female', 'email female', 'trim');
		$this->form_validation->set_rules('valid_female', 'valid female', 'trim');
		$this->form_validation->set_rules('unvalid_female', 'unvalid female', 'trim');
		$this->form_validation->set_rules('total_valid', 'total valid', 'trim');
		$this->form_validation->set_rules('total_unvalid', 'total unvalid', 'trim');

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
	public function export()
	{
		// Load plugin PHPExcel 
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		// Cal class PHPExcel 
		$excel = new PHPExcel();
		// Initial setting for Excel file
		$excel->getProperties()->setCreator('Apftl Admin')
			->setLastModifiedBy('Apftl Admin')
			->setTitle("Dadus ELisaun PFN")
			->setSubject("ELisaun PFN")
			->setDescription("Relaroiu ELisaun PFN")
			->setKeywords("Dadus ELisaun PFN");
		// Variable to store Header Style
		$style_col = array(
			'font' => array('bold' => true),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);
		// Variable to store Table Style
		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "Dadus Elisaun PFN ");
		$excel->getActiveSheet()->mergeCells('A1:E1');
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$excel->getActiveSheet()->freezePane('C4');
		// Header row 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "No");
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "Municipu");
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "Postu");
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "Periodu Elisaun");
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "Aplikante Feto");
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "Aplikante Mane");
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "Total Aplikante");
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "Selesiona Feto");
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "Selesiona Mane");
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "Total Selesiona");
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "Candidata");
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "Candidatu");
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "Total Candidata/u");
		$excel->setActiveSheetIndex(0)->setCellValue('N3', "Naran Kompletu");
		$excel->setActiveSheetIndex(0)->setCellValue('O3', "Edukasaun");
		$excel->setActiveSheetIndex(0)->setCellValue('P3', "Fatin Moris");
		$excel->setActiveSheetIndex(0)->setCellValue('Q3', "Data Moris");
		$excel->setActiveSheetIndex(0)->setCellValue('R3', "Adresu");
		$excel->setActiveSheetIndex(0)->setCellValue('S3', "Mobile");
		$excel->setActiveSheetIndex(0)->setCellValue('T3', "Email");
		$excel->setActiveSheetIndex(0)->setCellValue('U3', "Naran Kompletu");
		$excel->setActiveSheetIndex(0)->setCellValue('V3', "Edukasaun");
		$excel->setActiveSheetIndex(0)->setCellValue('W3', "Fatin Moris");
		$excel->setActiveSheetIndex(0)->setCellValue('X3', "Data Moris");
		$excel->setActiveSheetIndex(0)->setCellValue('Y3', "Adresu");
		$excel->setActiveSheetIndex(0)->setCellValue('Z3', "Mobile");
		$excel->setActiveSheetIndex(0)->setCellValue('AA3', "Email");
		// Apply style header 
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
		// Call function view in Apftl_election_model
		$elisaun = $this->Apftl_election_model->export();
		$no = 1; // Start numeration on table
		$numrow = 4; // First row for table
		foreach ($elisaun as $data) { // Looping for variable eisaun
			$excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->distric);
			$excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->subdistric);
			$excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->election_period);
			$excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->female_register);
			$excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->male_register);
			$excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->total_register);
			$excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data->female_selected);
			$excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data->male_selected);
			$excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->total_selected);
			$excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->female_candidate);
			$excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->male_candidate);
			$excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $data->total_candidate);
			$excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $data->name_male);
			$excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $data->edu_male);
			$excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $data->birth_p_male);
			$excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $data->birth_d_male);
			$excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $data->address_male);
			$excel->setActiveSheetIndex(0)->setCellValue('S' . $numrow, $data->mobile_male);
			$excel->setActiveSheetIndex(0)->setCellValue('T' . $numrow, $data->email_male);
			$excel->setActiveSheetIndex(0)->setCellValue('U' . $numrow, $data->name_female);
			$excel->setActiveSheetIndex(0)->setCellValue('V' . $numrow, $data->edu_female);
			$excel->setActiveSheetIndex(0)->setCellValue('W' . $numrow, $data->birth_p_female);
			$excel->setActiveSheetIndex(0)->setCellValue('X' . $numrow, $data->birth_d_female);
			$excel->setActiveSheetIndex(0)->setCellValue('Y' . $numrow, $data->address_female);
			$excel->setActiveSheetIndex(0)->setCellValue('Z' . $numrow, $data->mobile_female);
			$excel->setActiveSheetIndex(0)->setCellValue('AA' . $numrow, $data->email_female);
			// Apply style row 
			$excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('S' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('T' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('U' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('V' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('W' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('X' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Y' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Z' . $numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AA' . $numrow)->applyFromArray($style_row);

			$no++; // add 1 number when looping
			$numrow++; // add 1 row when looping
		}
		// Set width auto
		$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);

		// Set height auto
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
		// Set Landscape
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		// Set Title file 
		$excel->getActiveSheet(0)->setTitle("Report Dadus Elisaun PFN");
		$excel->setActiveSheetIndex(0);
		// Process file excel
		$filename = "Dadus Elisaun PFN - " . date("d-m-Y") . '.xlsx';
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="' . $filename . '"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
}
