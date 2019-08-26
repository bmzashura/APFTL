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

    public function get_data_aileu()
    {
        $sum = "SELECT b.subdistric as aileu, SUM(a.total_register) as register1, SUM(a.total_selected) as selected1, SUM(a.total_candidate) as candidate1  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 13 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }


    public function get_data_covalima()
    {
        $sum = "SELECT b.subdistric as covalima, SUM(a.total_register) as register2, SUM(a.total_selected) as selected2, SUM(a.total_candidate) as candidate2  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_baucau()
    {
        $sum = "SELECT b.subdistric as baucau, SUM(a.total_register) as register3, SUM(a.total_selected) as selected3, SUM(a.total_candidate) as candidate3  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 3 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_bobonaro()
    {
        $sum = "SELECT b.subdistric as bobonaro, SUM(a.total_register) as register4, SUM(a.total_selected) as selected4, SUM(a.total_candidate) as candidate4 from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 5 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_liquica()
    {
        $sum = "SELECT b.subdistric as liquica, SUM(a.total_register) as register5, SUM(a.total_selected) as selected5, SUM(a.total_candidate) as candidate5 from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 6 GROUP BY a.id_subdistric ORDER BY
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
}
