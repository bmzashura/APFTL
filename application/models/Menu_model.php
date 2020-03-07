<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `apftl_submenu`.*, `apftl_menu`.`menu`
        FROM `apftl_submenu` JOIN `apftl_menu`
        ON `apftl_submenu`.`menu_id` = `apftl_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }
}
