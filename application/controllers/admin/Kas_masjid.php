<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_masjid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    //pemasukan
    public function index()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/v_pemasukan');
        $this->load->view('templates/admin_footer');
    }
}
