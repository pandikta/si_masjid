<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurban extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_predikqurban');
        $this->load->view('templates/depan_footer');

        // $this->form_validation->set_rules('harga[]', 'Harga', 'required');
        // $this->form_validation->set_rules('harga_panitia[]', 'Harga Panitia', 'required');
        // if ($this->form_validation->run() == false) {
        //     redirect('kurban');
        // } else {
        //     $data['harga[]'] = $this->input->post('harga[]');
        //     $data['harga_panitia[]'] = $this->input->post('harga_panitia[]');

        //     // print_r($harga);
        //     // die();
        //     $this->session->set_flashdata($data);
        //     redirect('kurban/berat');
        // }
    }

    public function tambah_berat()
    {
        $this->form_validation->set_rules('harga[]', 'Harga', 'required');
        $this->form_validation->set_rules('harga_panitia[]', 'Harga Panitia', 'required');
        if ($this->form_validation->run() == false) {
            redirect('kurban');
        } else {
            //  $data['harga'] = $this->input->post('harga[]');
            //  $data['harga_panitia'] = $this->input->post('harga_panitia[]');

            // print_r($harga);
            // die();
            $this->session->set_flashdata('harga', $this->input->post('harga[]'));
            $this->session->set_flashdata('harga_panitia', $this->input->post('harga_panitia[]'));
            redirect('kurban/berat');
        }
    }

    public function berat()
    {
        $data['harga'] = $this->session->flashdata('harga');
        $data['harga_panitia'] = $this->session->flashdata('harga_panitia');
        // print_r($data);
        // die();
        $this->load->view('templates/depan_header');
        $this->load->view('templates/depan_navigation');
        $this->load->view('depan/v_beratsapi', $data);
        $this->load->view('templates/depan_footer');

        // $this->form_validation->set_rules('harga[]', 'Harga', 'required');
        // $this->form_validation->set_rules('harga_panitia[]', 'Harga Panitia', 'required');
        // if ($this->form_validation->run() == false) {
        //     redirect('kurban');
        // } else {
        //     $data['harga'] = $this->input->post('harga[]');
        //     $data['harga2'] = $this->input->post('harga_panitia[]');

        //     // print_r($harga);
        //     // print_r($harga_panitia);
        //     // die();
        //     $this->load->view('templates/depan_header');
        //     $this->load->view('templates/depan_navigation');
        //     $this->load->view('depan/v_beratsapi', $data);
        //     $this->load->view('templates/depan_footer');
        // }
    }
}
