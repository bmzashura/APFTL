<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_election_candidate extends CI_Model
{

    public function get_candidate_total()
    {
        $sum = "SELECT b.distric as total, SUM(a.female_candidate) as femaletotal, SUM(a.male_candidate) as maletotal from apftl_election as a
        left join distric as b on b.id=a.id_distric GROUP BY a.id_distric ORDER BY
        distric ASC";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_all()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleall, SUM(a.male_candidate) as maleall from apftl_election as a";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_dili()
    {
        $sum = "SELECT b.subdistric as dili, SUM(a.female_candidate) as femaledili, SUM(a.male_candidate) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_diliall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalediliall, SUM(a.male_candidate) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }



    public function get_candidate_covalima()
    {
        $sum = "SELECT b.subdistric as covalima,  SUM(a.female_candidate) as femalecovalima, SUM(a.male_candidate) as malecovalima  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_covalimaall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalecovalimaall, SUM(a.male_candidate) as malecovalimaall from apftl_election as a WHERE id_distric = 2";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_baucau()
    {
        $sum = "SELECT b.subdistric as baucau,  SUM(a.female_candidate) as femalebaucau, SUM(a.male_candidate) as malebaucau  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 3 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_baucauall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalebaucauall, SUM(a.male_candidate) as malebaucauall from apftl_election as a WHERE id_distric = 3";
        return $this->db->query($sum)->result();
    }


    public function get_candidate_bobonaro()
    {
        $sum = "SELECT b.subdistric as bobonaro, SUM(a.female_candidate) as femalebobonaro, SUM(a.male_candidate) as malebobonaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 5 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }
    public function get_candidate_bobonaroall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalebobonaroall, SUM(a.male_candidate) as malebobonaroall from apftl_election as a WHERE id_distric = 5";
        return $this->db->query($sum)->result();
    }


    public function get_candidate_liquica()
    {
        $sum = "SELECT b.subdistric as liquica,  SUM(a.female_candidate) as femaleliquica, SUM(a.male_candidate) as maleliquica  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 6 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_liquicaall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleliquicaall, SUM(a.male_candidate) as maleliquicaall from apftl_election as a WHERE id_distric = 6";
        return $this->db->query($sum)->result();
    }
}