<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        is_logged_in();
        $this->load->model('Kas_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['kas'] = $this->Kas_model->getJumlahKas();
        $data['kasmasuk'] = $this->Kas_model->getTotalPemasukan();
        $data['kaskeluar'] = $this->Kas_model->getTotalPengeluaran();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('templates/admin_footer');
    }
}
