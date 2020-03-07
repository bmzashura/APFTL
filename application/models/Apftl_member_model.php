<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_member_model extends CI_Model
{

    public $table = 'apftl_member';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all($limit, $start = 0, $q = NULL)
    {
        $this->db->select('apftl_member.*, apftl_gender.gender as gender');
        $this->db->join('apftl_gender', 'apftl_gender.id = apftl_member.id_gender', 'left');
        $this->db->order_by($this->id, $this->order);
        $this->db->or_like('f_name', $q);
        $this->db->or_like('l_name', $q);
        $this->db->or_like('gender', $q);
        $this->db->or_like('periodu', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('apftl_member.*, apftl_gender.gender as gender');
        $this->db->join('apftl_gender', 'apftl_gender.id = apftl_member.id_gender', 'left');
        $this->db->where('apftl_member.id', $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->select('apftl_member.*, apftl_gender.gender as gender');
        $this->db->join('apftl_gender', 'apftl_gender.id = apftl_member.id_gender', 'left');
        $this->db->or_like('f_name', $q);
        $this->db->or_like('l_name', $q);
        $this->db->or_like('gender', $q);
        $this->db->or_like('periodu', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->select('apftl_member.*, apftl_gender.gender as gender');
        $this->db->join('apftl_gender', 'apftl_gender.id = apftl_member.id_gender', 'left');
        $this->db->order_by($this->id, $this->order);
        $this->db->or_like('f_name', $q);
        $this->db->or_like('l_name', $q);
        $this->db->or_like('gender', $q);
        $this->db->or_like('periodu', $q);
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
}
