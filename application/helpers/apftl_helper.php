<?php 
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $control = $ci->uri->segment(1);
        $queryControl = $ci->db->get_where('apftl_control', ['control' => $control])->row_array();
        $control_id = $queryControl['id'];
        $userAccess = $ci->db->get_where('access_control', [
            'role_id' => $role_id,
            'control_id' => $control_id
        ]);
        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
function check_access($role_id, $control_id)
{
    $ci = get_instance();
    $ci->db->where('role_id', $role_id);
    $ci->db->where('control_id', $control_id);
    $result = $ci->db->get('access_control');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}