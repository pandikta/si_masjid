<?php

function is_logged_in()
{
    $ci =  get_instance(); //utk memanggil librari ci didalam sebuah fungsi

    //$this diganti dng $ci
    if (!$ci->session->userdata('username')) { //jika saat login tidak terdapat session / user maksa akses tanpa login
        redirect('admin/auth'); //maka akan langsung dipindahkan ke menu login
    } else {

        $role_id = $ci->session->userdata('level');
        $menu = $ci->uri->segment(1); //mengambil nama menu pada url

        //query select*from user_menu where menu = $menu
        $queryMenu = $ci->db->get_where('menu', ['name_menu' => $menu])->row_array();
        $level = ['administrator', 'bendahara'];
        //query select*from user_acces_menu where role_id = $role_id and menu_id=$menu_id
        $userAccess = $ci->db->get_where('tb_pengguna', ['level' => $level]);

        //jika saat login user maksa akses ke menu admin
        if ($userAccess == $level['administrator']) {
            // < 1 , karena saat user akses menu admin , di db tidak terdapat access ,
            // yg artinya hasil dari userAccess itu adalah 0
            redirect('auth/blocked'); //akses dipindahkan ke laman blocked
        }
    }
}

//fungsi utk menerima check akses yg datanya dikirimkan ke role_access.php
// function check_access($role_id, $menu_id)
// {

//     $ci = get_instance();

//     $result =  $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);
//     if ($result->num_rows() > 0) {
//         return "checked = 'checked' ";
//     }
// }
