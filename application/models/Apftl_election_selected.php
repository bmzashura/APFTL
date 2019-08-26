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

    public function get_selected_aileu()
    {
        $sum = "SELECT b.subdistric as aileu, SUM(a.female_selected) as femaleaileu, SUM(a.male_selected) as maleaileu  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 13 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_aileuall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleaileuall, SUM(a.male_selected) as maleaileuall from apftl_election as a WHERE id_distric = 13";
        return $this->db->query($sum)->result();
    }

    public function get_selected_ainaro()
    {
        $sum = "SELECT b.subdistric as ainaro, SUM(a.female_selected) as femaleainaro, SUM(a.male_selected) as maleainaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 9 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_ainaroall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleainaroall, SUM(a.male_selected) as maleainaroall from apftl_election as a WHERE id_distric = 9";
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


    public function get_selected_dili()
    {
        $sum = "SELECT b.subdistric as dili,  SUM(a.female_selected) as femaledili, SUM(a.male_selected) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_diliall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalediliall, SUM(a.male_selected) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }

    public function get_selected_ermera()
    {
        $sum = "SELECT b.subdistric as ermera,  SUM(a.female_selected) as femaleermera, SUM(a.male_selected) as maleermera  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 12 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_ermeraall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleermeraall, SUM(a.male_selected) as maleermeraall from apftl_election as a WHERE id_distric = 12";
        return $this->db->query($sum)->result();
    }


    public function get_selected_lautem()
    {
        $sum = "SELECT b.subdistric as lautem,  SUM(a.female_selected) as femalelautem, SUM(a.male_selected) as malelautem  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 8 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_lautemall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalelautemall, SUM(a.male_selected) as malelautemall from apftl_election as a WHERE id_distric = 8";
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



    public function get_selected_manufahi()
    {
        $sum = "SELECT b.subdistric as manufahi,  SUM(a.female_selected) as femalemanufahi, SUM(a.male_selected) as malemanufahi  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 10 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_manufahiall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalemanufahiall, SUM(a.male_selected) as malemanufahiall from apftl_election as a WHERE id_distric = 10";
        return $this->db->query($sum)->result();
    }

    public function get_selected_manatuto()
    {
        $sum = "SELECT b.subdistric as manatuto,  SUM(a.female_selected) as femalemanatuto, SUM(a.male_selected) as malemanatuto  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 7 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_manatutoall()
    {
        $sum = "SELECT SUM(a.female_selected) as femalemanatutoall, SUM(a.male_selected) as malemanatutoall from apftl_election as a WHERE id_distric = 7";
        return $this->db->query($sum)->result();
    }

    public function get_selected_raeoa()
    {
        $sum = "SELECT b.subdistric as raeoa,  SUM(a.female_selected) as femaleraeoa, SUM(a.male_selected) as maleraeoa  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 14 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_raeoaall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleraeoaall, SUM(a.male_selected) as maleraeoaall from apftl_election as a WHERE id_distric = 14";
        return $this->db->query($sum)->result();
    }

    public function get_selected_viqueque()
    {
        $sum = "SELECT b.subdistric as viqueque,  SUM(a.female_selected) as femaleviqueque, SUM(a.male_selected) as maleviqueque  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 11 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_selected_viquequeall()
    {
        $sum = "SELECT SUM(a.female_selected) as femaleviquequeall, SUM(a.male_selected) as maleviquequeall from apftl_election as a WHERE id_distric = 11";
        return $this->db->query($sum)->result();
    }
}