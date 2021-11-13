<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kas_model');
    }

    public function index()
    {
        // print_r($this->Kas_model->getKasPerBulan());
        // die();
        $data['total'] = $this->Kas_model->getSaldoperBulan();
        $data['totmasuk'] = $this->Kas_model->getSaldoMasukPerBulan();
        $data['totkeluar'] = $this->Kas_model->getSaldoKeluarPerBulan();
        $data['rekap'] = $this->Kas_model->getKasPerBulan();

        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_dana', $data);
        $this->load->view('templates/depan_footer');
    }
}
