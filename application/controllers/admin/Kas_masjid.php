<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_masjid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kas_model');
    }

    //pemasukan
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilpemasukan'] = $this->Kas_model->getAllPemasukan();
        $data['totalpemasukan'] = $this->Kas_model->getTotalPemasukan();
        $data['infaq'] = $this->Kas_model->countInfaq();
        $data['zakat'] = $this->Kas_model->countZakat();
        $data['wakaf'] = $this->Kas_model->countWakaf();
        $data['shadaqah'] = $this->Kas_model->countShadaqah();
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/kas_masjid/v_pemasukan', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_kas()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilpemasukan'] = $this->Kas_model->getAllPemasukan();
        $data['totalpemasukan'] = $this->Kas_model->getTotalPemasukan();
        $data['infaq'] = $this->Kas_model->countInfaq();
        $data['zakat'] = $this->Kas_model->countZakat();
        $data['wakaf'] = $this->Kas_model->countWakaf();
        $data['shadaqah'] = $this->Kas_model->countShadaqah();

        $this->form_validation->set_rules('tgl_km', 'Tgl_km', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_rules('masuk', 'Masuk', 'trim|required');
        $this->form_validation->set_rules('lazis', 'Lazis', 'trim|required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/kas_masjid/v_pemasukan', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Kas_model->addPemasukan();
            $this->session->set_flashdata('message', 'Di tambahkan');
            redirect('admin/kas_masjid');
        }
    }
}
