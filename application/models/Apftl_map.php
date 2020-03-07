<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apftl_map extends CI_Model
{
    public function get_aileu()
    {
        $sql = "SELECT COUNT(id) as aileu FROM apftl_program as a WHERE a.id_distric = 13 ";
        $result = $this->db->query($sql);
        return $result->row()->aileu;
    }

    public function get_ainaro()
    {
        $sql = "SELECT COUNT(id) as ainaro FROM apftl_program as a WHERE a.id_distric = 9 ";
        $result = $this->db->query($sql);
        return $result->row()->ainaro;
    }

    public function get_baucau()
    {
        $sql = "SELECT COUNT(id) as baucau FROM apftl_program as a WHERE a.id_distric = 3 ";
        $result = $this->db->query($sql);
        return $result->row()->baucau;
    }

    public function get_bobonaro()
    {
        $sql = "SELECT COUNT(id) as bobonaro FROM apftl_program as a WHERE a.id_distric = 5 ";
        $result = $this->db->query($sql);
        return $result->row()->bobonaro;
    }

    public function get_covalima()
    {
        $sql = "SELECT COUNT(id) as covalima FROM apftl_program as a WHERE a.id_distric = 2 ";
        $result = $this->db->query($sql);
        return $result->row()->covalima;
    }

    public function get_dili()
    {
        $sql = "SELECT COUNT(id) as dili FROM apftl_program as a WHERE a.id_distric = 1 ";
        $result = $this->db->query($sql);
        return $result->row()->dili;
    }

    public function get_ermera()
    {
        $sql = "SELECT COUNT(id) as ermera FROM apftl_program as a WHERE a.id_distric = 12 ";
        $result = $this->db->query($sql);
        return $result->row()->ermera;
    }

    public function get_lautem()
    {
        $sql = "SELECT COUNT(id) as lautem FROM apftl_program as a WHERE a.id_distric = 8 ";
        $result = $this->db->query($sql);
        return $result->row()->lautem;
    }

    public function get_liquica()
    {
        $sql = "SELECT COUNT(id) as liquica FROM apftl_program as a WHERE a.id_distric = 6 ";
        $result = $this->db->query($sql);
        return $result->row()->liquica;
    }

    public function get_manatuto()
    {
        $sql = "SELECT COUNT(id) as manatuto FROM apftl_program as a WHERE a.id_distric = 7 ";
        $result = $this->db->query($sql);
        return $result->row()->manatuto;
    }

    public function get_manufahi()
    {
        $sql = "SELECT COUNT(id) as manufahi FROM apftl_program as a WHERE a.id_distric = 10 ";
        $result = $this->db->query($sql);
        return $result->row()->manufahi;
    }

    public function get_viqueque()
    {
        $sql = "SELECT COUNT(id) as viqueque FROM apftl_program as a WHERE a.id_distric = 11 ";
        $result = $this->db->query($sql);
        return $result->row()->viqueque;
    }

    public function get_raeoa()
    {
        $sql = "SELECT COUNT(id) as raeoa FROM apftl_program as a WHERE a.id_distric = 14 ";
        $result = $this->db->query($sql);
        return $result->row()->raeoa;
    }
}