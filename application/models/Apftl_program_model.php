<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_program_model extends CI_Model
{

    public $table = 'apftl_program';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all($limit, $start = 0, $q = NULL)
    {
        $this->db->select('apftl_program.*, apftl_c_program.category as category');
        $this->db->select('apftl_program.*, apftl_partner.partner as partner');
        $this->db->select('apftl_program.*, distric.distric as distric');
        $this->db->select('apftl_program.*, apftl_activity.activity as activity');
        $this->db->join('apftl_c_program', 'apftl_c_program.id = apftl_program.id_category', 'left');
        $this->db->join('apftl_partner', 'apftl_partner.id = apftl_program.id_partner', 'left');
        $this->db->join('distric', 'distric.id = apftl_program.id_distric', 'left');
        $this->db->join('apftl_activity', 'apftl_activity.id = apftl_program.id_activity', 'left');
        $this->db->order_by($this->id, $this->order);
        $this->db->or_like('category', $q);
        $this->db->or_like('activity', $q);
        $this->db->or_like('partner', $q);
        $this->db->or_like('date', $q);
        $this->db->or_like('distric', $q);
        $this->db->or_like('description', $q);
        $this->db->or_like('objective', $q);
        $this->db->or_like('participant_m', $q);
        $this->db->or_like('participant_f', $q);
        $this->db->or_like('participant_sum', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('apftl_program.*, apftl_c_program.category as category');
        $this->db->select('apftl_program.*, apftl_partner.partner as partner');
        $this->db->select('apftl_program.*, distric.distric as distric');
        $this->db->select('apftl_program.*, apftl_activity.activity as activity');
        $this->db->join('apftl_c_program', 'apftl_c_program.id = apftl_program.id_category', 'left');
        $this->db->join('apftl_partner', 'apftl_partner.id = apftl_program.id_partner', 'left');
        $this->db->join('distric', 'distric.id = apftl_program.id_distric', 'left');
        $this->db->join('apftl_activity', 'apftl_activity.id = apftl_program.id_activity', 'left');
        $this->db->where('apftl_program.id', $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('id_category', $q);
        $this->db->or_like('id_activity', $q);
        $this->db->or_like('id_partner', $q);
        $this->db->or_like('date', $q);
        $this->db->or_like('id_distric', $q);
        $this->db->or_like('description', $q);
        $this->db->or_like('objective', $q);
        $this->db->or_like('participant_m', $q);
        $this->db->or_like('participant_f', $q);
        $this->db->or_like('participant_sum', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('id_category', $q);
        $this->db->or_like('id_activity', $q);
        $this->db->or_like('id_partner', $q);
        $this->db->or_like('date', $q);
        $this->db->or_like('id_distric', $q);
        $this->db->or_like('description', $q);
        $this->db->or_like('objective', $q);
        $this->db->or_like('participant_m', $q);
        $this->db->or_like('participant_f', $q);
        $this->db->or_like('participant_sum', $q);
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
