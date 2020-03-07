<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_chart extends CI_Model
{
    //programa start
    // programa total
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

    public function get_total_year()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
        GROUP BY YEAR(a.date) ORDER BY
        tinan ASC";
        return $this->db->query($sum)->result();
    }

    public function get_total_cat(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category  GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    // programa aileu

    public function get_total_aileu()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 13";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_aileu()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 13";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_aileu()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 13";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_aileu()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 13";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_aileu()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 13 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_aileu(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 13 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_aileu()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 13 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    // program ainaro
    public function get_total_ainaro()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 9";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_ainaro()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 9";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_ainaro()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 9";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_ainaro()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 9";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_ainaro()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 9 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_ainaro(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 9 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_ainaro()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 9 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    // programa baucau
    public function get_total_baucau()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 3";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_baucau()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 3";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_baucau()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 3";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_baucau()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 3";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_baucau()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 3 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }



    public function get_total_cat_baucau(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 3 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_baucau()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 3 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    // programa bobonaro
    public function get_total_bobonaro()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 5";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_bobonaro()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 5";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_bobonaro()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 5";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_bobonaro()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 5";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_bobonaro()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 5 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }



    public function get_total_cat_bobonaro(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 5 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_bobonaro()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 5 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa covalima
    public function get_total_covalima()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 2";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_covalima()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 2";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_covalima()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 2";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_covalima()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 2";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_covalima()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 2 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_covalima(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 2 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_covalima()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 2 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa dili
    public function get_total_dili()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 1";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_dili()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 1";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_dili()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 1";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_dili()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 1";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_dili()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 1 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }



    public function get_total_cat_dili(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 1 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_dili()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 1 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa ermera
    public function get_total_ermera()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 12";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_ermera()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 12";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_ermera()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 12";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_ermera()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 12";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_ermera()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 12 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }



    public function get_total_cat_ermera(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 12 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_ermera()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 12 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa lautem
    public function get_total_lautem()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 8";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_lautem()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 8";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_lautem()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 8";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_lautem()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 8";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_lautem()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 8 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_lautem(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 8 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_lautem()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 8 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa liquica
    public function get_total_liquica()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 6";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_liquica()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 6";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_liquica()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 6";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_liquica()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 6";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_liquica()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 6 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_liquica(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 6 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_liquica()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 6 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa manufahi
    public function get_total_manufahi()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 10";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_manufahi()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 10";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_manufahi()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 10";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_manufahi()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 10";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_manufahi()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 10 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }



    public function get_total_cat_manufahi(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 10 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_manufahi()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 10 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa manatuto
    public function get_total_manatuto()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 7";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_manatuto()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 7";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_manatuto()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 7";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_manatuto()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 7";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_manatuto()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 7 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_manatuto(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 7 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_manatuto()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 7 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa raeoa
    public function get_total_raeoa()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 14";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_raeoa()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 14";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_raeoa()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 14";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_raeoa()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 14";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_raeoa()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 14 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_raeoa(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 14 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_raeoa()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 14 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }

    //programa viqueque
    public function get_total_viqueque()
    {
        $sql = "SELECT SUM(participant_sum) as sum FROM apftl_program WHERE id_distric = 11";
        $result = $this->db->query($sql);
        return $result->row()->sum;
    }
    public function get_feto_viqueque()
    {
        $sql = "SELECT SUM(participant_f) as feto FROM apftl_program WHERE id_distric = 11";
        $result = $this->db->query($sql);
        return $result->row()->feto;
    }
    public function get_mane_viqueque()
    {
        $sql = "SELECT SUM(participant_m) as mane FROM apftl_program WHERE id_distric = 11";
        $result = $this->db->query($sql);
        return $result->row()->mane;
    }
    public function get_program_viqueque()
    {
        $sql = "SELECT COUNT(id) as program FROM apftl_program WHERE id_distric = 11";
        $result = $this->db->query($sql);
        return $result->row()->program;
    }

    public function get_total_year_viqueque()
    {
        $sum = "SELECT YEAR(a.date) as tinan, SUM(a.participant_sum) as total, SUM(a.participant_f) as feto, SUM(a.participant_m) as mane  from apftl_program as a
    WHERE id_distric = 11 GROUP BY YEAR(a.date) ORDER BY
    tinan ASC";
        return $this->db->query($sum)->result();
    }


    public function get_total_cat_viqueque(){
        $sum="SELECT YEAR(a.date) AS tinan1, 
        ROUND(SUM(CASE WHEN a.id_category = '3' THEN a.participant_sum else 0 END )) AS satu ,
        ROUND(SUM(CASE WHEN a.id_category = '4' THEN a.participant_sum else 0 END )) AS dua,
        ROUND(SUM(CASE WHEN a.id_category = '5' THEN a.participant_sum else 0 END )) AS tiga,
        ROUND(SUM(CASE WHEN a.id_category = '6' THEN a.participant_sum else 0 END )) AS empat
        FROM apftl_program AS a  WHERE id_distric = 11 GROUP BY YEAR(a.date) ORDER BY tinan1 DESC";
        return $this->db->query($sum)->result();
    }
    public function get_total_persen_viqueque()
    {
        $sum = "SELECT b.category as category, SUM(a.participant_sum) as totalpersen from apftl_program as a
        left join apftl_c_program as b on b.id=a.id_category WHERE id_distric = 11 GROUP BY a.id_category ORDER BY
        category ASC ";
        return $this->db->query($sum)->result();
    }
    //programa end



    //elisaun start
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
    //elisaun end
}
