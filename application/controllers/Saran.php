<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index()
    {
        //$data['jumat'] = $this->Kegiatan_model->getPetugasJumatByBulan();

        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_saran');
        $this->load->view('templates/depan_footer');
    }
    public function tambah_saran()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Format Email Salah');
            redirect('saran');
        } else {
            $pesan = $this->input->post('pesan', true);
            if (strlen($pesan) > 100) {
                $this->session->set_flashdata('flash', 'Jumlah Kata Melebihi Batas');
                redirect('saran');
            } else {
                $data = [
                    'nama' => $this->input->post('nama', true),
                    'email' => $this->input->post('email', true),
                    'telepon' => $this->input->post('telepon', true),
                    'pesan' => $pesan,
                    'created_at' => date("Y-m-d H:i:s")
                ];
                $this->db->insert('tb_saran', $data);
                $this->session->set_flashdata('message', 'Ditambahkan');
                redirect('saran');
            }
        }
    }
}
