<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_election_register extends CI_Model
{

    public function get_register_total()
    {
        $sum = "SELECT b.distric as total, SUM(a.female_register) as femaletotal, SUM(a.male_register) as maletotal from apftl_election as a
        left join distric as b on b.id=a.id_distric GROUP BY a.id_distric ORDER BY
        distric ASC";
        return $this->db->query($sum)->result();
    }

    public function get_register_all()
    {
        $sum = "SELECT SUM(a.female_register) as femaleall, SUM(a.male_register) as maleall from apftl_election as a";
        return $this->db->query($sum)->result();
    }

    public function get_register_dili()
    {
        $sum = "SELECT b.subdistric as dili, SUM(a.female_register) as femaledili, SUM(a.male_register) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_diliall()
    {
        $sum = "SELECT SUM(a.female_register) as femalediliall, SUM(a.male_register) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }



    public function get_register_covalima()
    {
        $sum = "SELECT b.subdistric as covalima,  SUM(a.female_register) as femalecovalima, SUM(a.male_register) as malecovalima  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 2 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_covalimaall()
    {
        $sum = "SELECT SUM(a.female_register) as femalecovalimaall, SUM(a.male_register) as malecovalimaall from apftl_election as a WHERE id_distric = 2";
        return $this->db->query($sum)->result();
    }

    public function get_register_baucau()
    {
        $sum = "SELECT b.subdistric as baucau,  SUM(a.female_register) as femalebaucau, SUM(a.male_register) as malebaucau  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 3 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_baucauall()
    {
        $sum = "SELECT SUM(a.female_register) as femalebaucauall, SUM(a.male_register) as malebaucauall from apftl_election as a WHERE id_distric = 3";
        return $this->db->query($sum)->result();
    }


    public function get_register_bobonaro()
    {
        $sum = "SELECT b.subdistric as bobonaro, SUM(a.female_register) as femalebobonaro, SUM(a.male_register) as malebobonaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 5 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }
    public function get_register_bobonaroall()
    {
        $sum = "SELECT SUM(a.female_register) as femalebobonaroall, SUM(a.male_register) as malebobonaroall from apftl_election as a WHERE id_distric = 5";
        return $this->db->query($sum)->result();
    }


    public function get_register_liquica()
    {
        $sum = "SELECT b.subdistric as liquica,  SUM(a.female_register) as femaleliquica, SUM(a.male_register) as maleliquica  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 6 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_liquicaall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleliquicaall, SUM(a.male_register) as maleliquicaall from apftl_election as a WHERE id_distric = 6";
        return $this->db->query($sum)->result();
    }
}