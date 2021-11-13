<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jumat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index()
    {
        $data['jumat'] = $this->Kegiatan_model->getPetugasJumatByBulan();

        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_jadwaljumat', $data);
        $this->load->view('templates/depan_footer');
    }
}
