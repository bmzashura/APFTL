<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_chart extends CI_Model
{

    public function get_data_sum()
    {
        $sum = "SELECT b.distric as distric, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
        left join distric as b on b.id=a.id_distric GROUP BY a.id_distric ORDER BY
        distric ASC";
        return $this->db->query($sum)->result();
    }

    public function get_data_dili()
    {
        $sum = "SELECT b.subdistric as subdistric, SUM(a.total_register) as register, SUM(a.total_selected) as selected, SUM(a.total_candidate) as candidate  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_covalima()
    {
        $sum = "SELECT b.subdistric as subdistric, SUM(a.total_register) as register, SUM(a.total_selected) as selected, SUM(a.total_candidate) as candidate  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_total()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }
    public function get_register()
    {
        $sql = "SELECT SUM(total_register) as register FROM apftl_election";
        $result = $this->db->query($sql);
        return $result->row()->register;
    }
    public function get_select()
    {
        $sql = "SELECT SUM(total_selected) as selected FROM apftl_election";
        $result = $this->db->query($sql);
        return $result->row()->selected;
    }
    public function get_candidate()
    {
        $sql = "SELECT SUM(total_candidate) as candidate FROM apftl_election";
        $result = $this->db->query($sql);
        return $result->row()->candidate;
    }
    public function get_validu()
    {
        $sql = "SELECT SUM(total_valid) as validu FROM apftl_election";
        $result = $this->db->query($sql);
        return $result->row()->validu;
    }
    public function get_invalidu()
    {
        $sql = "SELECT SUM(total_unvalid) as invalidu FROM apftl_election";
        $result = $this->db->query($sql);
        return $result->row()->invalidu;
    }
}
