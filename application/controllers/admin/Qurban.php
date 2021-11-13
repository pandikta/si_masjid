<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Qurban extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Qurban";
        $level = $this->session->userdata('level');
        if ($level == 'administrator') {
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/v_qurban', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/bendahara_sidebar', $data);
            $this->load->view('admin/v_qurban', $data);
            $this->load->view('templates/admin_footer', $data);
        }
    }
}
