<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_election_selected extends CI_Model
{

    public function get_selected_total()
    {
        $sum = "SELECT b.distric as total, SUM(a.female_selected) as femaletotal, SUM(a.male_selected) as maletotal from apftl_election as a
        left join distric as b on b.id=a.id_distric GROUP BY a.id_distric ORDER BY
        distric ASC";
        return $this->db->query($sum)->result();
    }

    public function get_selected_all()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleall, SUM(a.male_selected) as maleall from apftl_election as a";
        return $this->db->query($sum)->result();
    }

    public function get_selected_dili()
    {
        $sum = "SELECT b.subdistric as dili, SUM(a.female_selected) as femaledili, SUM(a.male_selected) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_diliall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalediliall, SUM(a.male_selected) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }



    public function get_selected_covalima()
    {
        $sum = "SELECT b.subdistric as covalima,  SUM(a.female_selected) as femalecovalima, SUM(a.male_selected) as malecovalima  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_covalimaall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalecovalimaall, SUM(a.male_selected) as malecovalimaall from apftl_election as a WHERE id_distric = 2";
        return $this->db->query($sum)->result();
    }

    public function get_selected_baucau()
    {
        $sum = "SELECT b.subdistric as baucau,  SUM(a.female_selected) as femalebaucau, SUM(a.male_selected) as malebaucau  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 3 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_baucauall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalebaucauall, SUM(a.male_selected) as malebaucauall from apftl_election as a WHERE id_distric = 3";
        return $this->db->query($sum)->result();
    }


    public function get_selected_bobonaro()
    {
        $sum = "SELECT b.subdistric as bobonaro, SUM(a.female_selected) as femalebobonaro, SUM(a.male_selected) as malebobonaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 5 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }
    public function get_selected_bobonaroall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalebobonaroall, SUM(a.male_selected) as malebobonaroall from apftl_election as a WHERE id_distric = 5";
        return $this->db->query($sum)->result();
    }


    public function get_selected_liquica()
    {
        $sum = "SELECT b.subdistric as liquica,  SUM(a.female_selected) as femaleliquica, SUM(a.male_selected) as maleliquica  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 6 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_liquicaall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleliquicaall, SUM(a.male_selected) as maleliquicaall from apftl_election as a WHERE id_distric = 6";
        return $this->db->query($sum)->result();
    }
}