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

    public function get_register_aileu()
    {
        $sum = "SELECT b.subdistric as aileu, SUM(a.female_register) as femaleaileu, SUM(a.male_register) as maleaileu  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 13 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_aileuall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleaileuall, SUM(a.male_register) as maleaileuall from apftl_election as a WHERE id_distric = 13";
        return $this->db->query($sum)->result();
    }

    public function get_register_ainaro()
    {
        $sum = "SELECT b.subdistric as ainaro, SUM(a.female_register) as femaleainaro, SUM(a.male_register) as maleainaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 9 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_ainaroall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleainaroall, SUM(a.male_register) as maleainaroall from apftl_election as a WHERE id_distric = 9";
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


    public function get_register_dili()
    {
        $sum = "SELECT b.subdistric as dili,  SUM(a.female_register) as femaledili, SUM(a.male_register) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_diliall()
    {
        $sum = "SELECT SUM(a.female_register) as femalediliall, SUM(a.male_register) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }

    public function get_register_ermera()
    {
        $sum = "SELECT b.subdistric as ermera,  SUM(a.female_register) as femaleermera, SUM(a.male_register) as maleermera  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 12 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_ermeraall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleermeraall, SUM(a.male_register) as maleermeraall from apftl_election as a WHERE id_distric = 12";
        return $this->db->query($sum)->result();
    }


    public function get_register_lautem()
    {
        $sum = "SELECT b.subdistric as lautem,  SUM(a.female_register) as femalelautem, SUM(a.male_register) as malelautem  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 8 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_lautemall()
    {
        $sum = "SELECT SUM(a.female_register) as femalelautemall, SUM(a.male_register) as malelautemall from apftl_election as a WHERE id_distric = 8";
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



    public function get_register_manufahi()
    {
        $sum = "SELECT b.subdistric as manufahi,  SUM(a.female_register) as femalemanufahi, SUM(a.male_register) as malemanufahi  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 10 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_manufahiall()
    {
        $sum = "SELECT SUM(a.female_register) as femalemanufahiall, SUM(a.male_register) as malemanufahiall from apftl_election as a WHERE id_distric = 10";
        return $this->db->query($sum)->result();
    }

    public function get_register_manatuto()
    {
        $sum = "SELECT b.subdistric as manatuto,  SUM(a.female_register) as femalemanatuto, SUM(a.male_register) as malemanatuto  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 7 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_manatutoall()
    {
        $sum = "SELECT SUM(a.female_register) as femalemanatutoall, SUM(a.male_register) as malemanatutoall from apftl_election as a WHERE id_distric = 7";
        return $this->db->query($sum)->result();
    }

    public function get_register_raeoa()
    {
        $sum = "SELECT b.subdistric as raeoa,  SUM(a.female_register) as femaleraeoa, SUM(a.male_register) as maleraeoa  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 14 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_raeoaall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleraeoaall, SUM(a.male_register) as maleraeoaall from apftl_election as a WHERE id_distric = 14";
        return $this->db->query($sum)->result();
    }

    public function get_register_viqueque()
    {
        $sum = "SELECT b.subdistric as viqueque,  SUM(a.female_register) as femaleviqueque, SUM(a.male_register) as maleviqueque  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 11 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_register_viquequeall()
    {
        $sum = "SELECT SUM(a.female_register) as femaleviquequeall, SUM(a.male_register) as maleviquequeall from apftl_election as a WHERE id_distric = 11";
        return $this->db->query($sum)->result();
    }
}