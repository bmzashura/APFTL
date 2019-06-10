<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Apftl_election_model extends CI_Model
{

	public $table = 'apftl_election';
	public $id = 'id';
	public $order = 'DESC';
	public $distric = 'distric.id';

	function __construct()
	{
		parent::__construct();
	}

	// get all
	function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	// get data by id
	function get_by_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	// get total rows
	function total_rows($q = NULL)
	{
		$this->db->like('id', $q);
		$this->db->or_like('id_distric', $q);
		$this->db->or_like('id_subdistric', $q);
		$this->db->or_like('election_period', $q);
		$this->db->or_like('female_register', $q);
		$this->db->or_like('male_register', $q);
		$this->db->or_like('total_register', $q);
		$this->db->or_like('female_selected', $q);
		$this->db->or_like('male_selected', $q);
		$this->db->or_like('total_selected', $q);
		$this->db->or_like('female_candidate', $q);
		$this->db->or_like('male_candidate', $q);
		$this->db->or_like('total_candidate', $q);
		$this->db->or_like('photo_male', $q);
		$this->db->or_like('name_male', $q);
		$this->db->or_like('birth_p_male', $q);
		$this->db->or_like('birth_d_male', $q);
		$this->db->or_like('address_male', $q);
		$this->db->or_like('mobile_male', $q);
		$this->db->or_like('email_male', $q);
		$this->db->or_like('valid_male', $q);
		$this->db->or_like('unvalid_male', $q);
		$this->db->or_like('photo_female', $q);
		$this->db->or_like('name_female', $q);
		$this->db->or_like('birth_p_female', $q);
		$this->db->or_like('birth_d_female', $q);
		$this->db->or_like('address_female', $q);
		$this->db->or_like('mobile_female', $q);
		$this->db->or_like('email_female', $q);
		$this->db->or_like('valid_female', $q);
		$this->db->or_like('unvalid_female', $q);
		$this->db->or_like('total_valid', $q);
		$this->db->or_like('total_unvalid', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	// get data with limit and search
	function get_limit_data($limit, $start = 0, $q = NULL)
	{
		$this->db->order_by($this->id, $this->order);
		$this->db->like('id', $q);
		$this->db->or_like('id_distric', $q);
		$this->db->or_like('id_subdistric', $q);
		$this->db->or_like('election_period', $q);
		$this->db->or_like('female_register', $q);
		$this->db->or_like('male_register', $q);
		$this->db->or_like('total_register', $q);
		$this->db->or_like('female_selected', $q);
		$this->db->or_like('male_selected', $q);
		$this->db->or_like('total_selected', $q);
		$this->db->or_like('female_candidate', $q);
		$this->db->or_like('male_candidate', $q);
		$this->db->or_like('total_candidate', $q);
		$this->db->or_like('photo_male', $q);
		$this->db->or_like('name_male', $q);
		$this->db->or_like('birth_p_male', $q);
		$this->db->or_like('birth_d_male', $q);
		$this->db->or_like('address_male', $q);
		$this->db->or_like('mobile_male', $q);
		$this->db->or_like('email_male', $q);
		$this->db->or_like('valid_male', $q);
		$this->db->or_like('unvalid_male', $q);
		$this->db->or_like('photo_female', $q);
		$this->db->or_like('name_female', $q);
		$this->db->or_like('birth_p_female', $q);
		$this->db->or_like('birth_d_female', $q);
		$this->db->or_like('address_female', $q);
		$this->db->or_like('mobile_female', $q);
		$this->db->or_like('email_female', $q);
		$this->db->or_like('valid_female', $q);
		$this->db->or_like('unvalid_female', $q);
		$this->db->or_like('total_valid', $q);
		$this->db->or_like('total_unvalid', $q);
		$this->db->limit($limit, $start);
		return $this->db->get($this->table)->result();
	}

	// insert data
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	// update data
	function update($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);
	}

	// delete data
	function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	}

	public function get_distric_query()
	{
		$query = $this->db->get('distric');
		return $query->result();
	}
	public function get_subdistric_query($distric)
	{
		$query = $this->db->get_where('subdistric', array('id_distric' => $distric));
		return $query->result();
	}
}
