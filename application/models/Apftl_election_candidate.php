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

    public function get_candidate_aileu()
    {
        $sum = "SELECT b.subdistric as aileu, SUM(a.female_candidate) as femaleaileu, SUM(a.male_candidate) as maleaileu  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 13 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_aileuall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleaileuall, SUM(a.male_candidate) as maleaileuall from apftl_election as a WHERE id_distric = 13";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_ainaro()
    {
        $sum = "SELECT b.subdistric as ainaro, SUM(a.female_candidate) as femaleainaro, SUM(a.male_candidate) as maleainaro  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 9 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_ainaroall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleainaroall, SUM(a.male_candidate) as maleainaroall from apftl_election as a WHERE id_distric = 9";
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


    public function get_candidate_dili()
    {
        $sum = "SELECT b.subdistric as dili,  SUM(a.female_candidate) as femaledili, SUM(a.male_candidate) as maledili  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 1 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_diliall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalediliall, SUM(a.male_candidate) as malediliall from apftl_election as a WHERE id_distric = 1";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_ermera()
    {
        $sum = "SELECT b.subdistric as ermera,  SUM(a.female_candidate) as femaleermera, SUM(a.male_candidate) as maleermera  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 12 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_ermeraall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleermeraall, SUM(a.male_candidate) as maleermeraall from apftl_election as a WHERE id_distric = 12";
        return $this->db->query($sum)->result();
    }


    public function get_candidate_lautem()
    {
        $sum = "SELECT b.subdistric as lautem,  SUM(a.female_candidate) as femalelautem, SUM(a.male_candidate) as malelautem  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 8 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_lautemall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalelautemall, SUM(a.male_candidate) as malelautemall from apftl_election as a WHERE id_distric = 8";
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



    public function get_candidate_manufahi()
    {
        $sum = "SELECT b.subdistric as manufahi,  SUM(a.female_candidate) as femalemanufahi, SUM(a.male_candidate) as malemanufahi  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 10 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_manufahiall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalemanufahiall, SUM(a.male_candidate) as malemanufahiall from apftl_election as a WHERE id_distric = 10";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_manatuto()
    {
        $sum = "SELECT b.subdistric as manatuto,  SUM(a.female_candidate) as femalemanatuto, SUM(a.male_candidate) as malemanatuto  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 7 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_manatutoall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femalemanatutoall, SUM(a.male_candidate) as malemanatutoall from apftl_election as a WHERE id_distric = 7";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_raeoa()
    {
        $sum = "SELECT b.subdistric as raeoa,  SUM(a.female_candidate) as femaleraeoa, SUM(a.male_candidate) as maleraeoa  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 14 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_raeoaall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleraeoaall, SUM(a.male_candidate) as maleraeoaall from apftl_election as a WHERE id_distric = 14";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_viqueque()
    {
        $sum = "SELECT b.subdistric as viqueque,  SUM(a.female_candidate) as femaleviqueque, SUM(a.male_candidate) as maleviqueque  from apftl_election as a
        left join subdistric as b on b.id=a.id_subdistric WHERE b.id_distric = 11 GROUP BY a.id_subdistric ORDER BY
        subdistric ASC ";
        return $this->db->query($sum)->result();
    }

    public function get_candidate_viquequeall()
    {
        $sum = "SELECT SUM(a.female_candidate) as femaleviquequeall, SUM(a.male_candidate) as maleviquequeall from apftl_election as a WHERE id_distric = 11";
        return $this->db->query($sum)->result();
    }
}