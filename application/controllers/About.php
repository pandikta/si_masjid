<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_about');
        $this->load->view('templates/depan_footer');
    }
}
