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
        $sum = "SELECT b.subdistric as aileu, SUM(a.total_register) as registeraileu, SUM(a.total_selected) as selectedaileu, SUM(a.total_candidate) as candidateaileu  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 13 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_ainaro()
    {
        $sum = "SELECT b.subdistric as ainaro, SUM(a.total_register) as registerainaro, SUM(a.total_selected) as selectedainaro, SUM(a.total_candidate) as candidateainaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 9 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_baucau()
    {
        $sum = "SELECT b.subdistric as baucau, SUM(a.total_register) as registerbaucau, SUM(a.total_selected) as selectedbaucau, SUM(a.total_candidate) as candidatebaucau  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 3 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_bobonaro()
    {
        $sum = "SELECT b.subdistric as bobonaro, SUM(a.total_register) as registerbobonaro, SUM(a.total_selected) as selectedbobonaro, SUM(a.total_candidate) as candidatebobonaro from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 5 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_covalima()
    {
        $sum = "SELECT b.subdistric as covalima, SUM(a.total_register) as registercovalima, SUM(a.total_selected) as selectedcovalima, SUM(a.total_candidate) as candidatecovalima  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_dili()
    {
        $sum = "SELECT b.subdistric as dili, SUM(a.total_register) as registerdili, SUM(a.total_selected) as selecteddili, SUM(a.total_candidate) as candidatedili from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_ermera()
    {
        $sum = "SELECT b.subdistric as ermera, SUM(a.total_register) as registerermera, SUM(a.total_selected) as selectedermera, SUM(a.total_candidate) as candidateermera from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 12 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_lautem()
    {
        $sum = "SELECT b.subdistric as lautem, SUM(a.total_register) as registerlautem, SUM(a.total_selected) as selectedlautem, SUM(a.total_candidate) as candidatelautem from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 8 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_liquica()
    {
        $sum = "SELECT b.subdistric as liquica, SUM(a.total_register) as registerliquica, SUM(a.total_selected) as selectedliquica, SUM(a.total_candidate) as candidateliquica from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 6 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_manufahi()
    {
        $sum = "SELECT b.subdistric as manufahi, SUM(a.total_register) as registermanufahi, SUM(a.total_selected) as selectedmanufahi, SUM(a.total_candidate) as candidatemanufahi from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 10 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_manatuto()
    {
        $sum = "SELECT b.subdistric as manatuto, SUM(a.total_register) as registermanatuto, SUM(a.total_selected) as selectedmanatuto, SUM(a.total_candidate) as candidatemanatuto from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 7 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_raeoa()
    {
        $sum = "SELECT b.subdistric as raeoa, SUM(a.total_register) as registerraeoa, SUM(a.total_selected) as selectedraeoa, SUM(a.total_candidate) as candidatemanufahi from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 14 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_data_viqueque()
    {
        $sum = "SELECT b.subdistric as viqueque, SUM(a.total_register) as registerviqueque, SUM(a.total_selected) as selectedviqueque, SUM(a.total_candidate) as candidateviqueque from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 11 GROUP BY a.id_subdistric ORDER BY
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
