<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {

        $role_id = $ci->session->userdata('role_id'); // cek role id user
        $menu = $ci->uri->segment(1); // tangkap menu yang tersedia pada url

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

        $menu_id = $queryMenu['id'];

        // tangkap role id dan menu id
        $access_menu = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        // jika menu id lebih kecil dari 1
        if ($access_menu->num_rows() < 1) {
            # code...
            redirect('auth/blocked');
        }
    }
}

function chacked_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        # code...
        return "checked = 'checked'";
    }
}