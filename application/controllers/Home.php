<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_home');
        $this->load->view('templates/depan_footer');
    }
}
