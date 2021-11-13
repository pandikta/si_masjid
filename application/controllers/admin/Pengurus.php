<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
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
        $data['imam'] = $this->db->count_all('tb_imam');
        $data['khatib'] = $this->db->count_all('tb_khatib');
        $data['muazin'] = $this->db->count_all('tb_muazin');
        $data['pengurus'] = $this->db->count_all('tb_pengurus');
        $data['remajamasjid'] = $this->db->count_all('tb_remajamasjid');
        $data['jan'] = $this->Kas_model->getJumlahJan();
        $data['Feb'] = $this->Kas_model->getJumlahFeb();
        $data['Mar'] = $this->Kas_model->getJumlahMar();
        $data['Apr'] = $this->Kas_model->getJumlahApr();
        $data['Mei'] = $this->Kas_model->getJumlahMei();
        $data['Jun'] = $this->Kas_model->getJumlahJun();
        $data['Jul'] = $this->Kas_model->getJumlahJul();
        $data['Aug'] = $this->Kas_model->getJumlahAug();
        $data['Sep'] = $this->Kas_model->getJumlahSep();
        $data['Okt'] = $this->Kas_model->getJumlahOkt();
        $data['Nov'] = $this->Kas_model->getJumlahNov();
        $data['Des'] = $this->Kas_model->getJumlahDes();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/pengurus_sidebar', $data);
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('templates/admin_footer');
    }
}
