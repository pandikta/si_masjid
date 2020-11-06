<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_masjid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kas_model');
        is_logged_in();
    }

    function get_ajax_pemasukan()
    {
        $list = $this->Kas_model->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $item) {
            $tgl = $item->tgl_km;
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = date("d-M-Y", strtotime($tgl));
            $row[] = $item->keterangan;
            $row[] = $item->masuk;
            $row[] = $item->lazis;
            // add html for action
            $row[] = '<div class="form-button-action">
                <a href="' . site_url('admin/kas_masjid/edit_kasmasuk/' . $item->id) . '" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data"> 
                    <i class="fa fa-edit"></i>
                </a>
                <a href="' . site_url('admin/kas_masjid/delete_kasmasuk/' . $item->id) . '" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
                    <i class="fa fa-times"></i>
                </a>
            </div>';
            $data[] = $row;
        }
        $output = array(
            "draw" => @$_POST['draw'],
            "recordsTotal" => $this->Kas_model->count_all(),
            "recordsFiltered" => $this->Kas_model->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
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
