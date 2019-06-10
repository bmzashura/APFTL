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
}
