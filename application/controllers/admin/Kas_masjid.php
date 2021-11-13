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

    // function get_ajax_pemasukan()
    // {
    //     $list = $this->Kas_model->get_datatables();
    //     $data = array();
    //     $no = @$_POST['start'];
    //     foreach ($list as $kas) {
    //         $tgl = $kas->tgl_km;
    //         $no++;
    //         $row = array();
    //         $row[] = $no . ".";
    //         $row[] = date("d-M-Y", strtotime($tgl));
    //         $row[] = $kas->keterangan;
    //         $row[] = $kas->masuk;
    //         $row[] = $kas->lazis;

    //         // add html for action
    //         $id = $kas->id;
    //         // $row[] = '<div class="form-button-action">
    //         //     <a href="" data-toggle="modal" data-target="#editpemasukan' . $id . '" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data"> 
    //         //         <i class="fa fa-edit"></i>
    //         //     </a>
    //         //     <a href="' . site_url('admin/kas_masjid/delete_pemasukan/' . $kas->id) . '" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
    //         //         <i class="fa fa-times"></i>
    //         //     </a>
    //         // </div>';
    //         $data[] = $row;
    //     }
    //     $output = array(
    //         "draw" => @$_POST['draw'],
    //         "recordsTotal" => $this->Kas_model->count_all(),
    //         "recordsFiltered" => $this->Kas_model->count_filtered(),
    //         "data" => $data,
    //     );
    //     // output to json format
    //     echo json_encode($output);
    // }

    //pemasukan
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $data['totalpemasukan'] = $this->Kas_model->getTotalPemasukan();
        $data['infaq'] = $this->Kas_model->countInfaq();
        $data['zakat'] = $this->Kas_model->countZakat();
        $data['wakaf'] = $this->Kas_model->countWakaf();
        $data['shadaqah'] = $this->Kas_model->countShadaqah();
        $data['isilazis'] = ['infaq', 'shadaqah', 'wakaf', 'zakat'];
        $level = $this->session->userdata('level');

        $this->form_validation->set_rules('tgl1', 'Tgl1', 'required');
        $this->form_validation->set_rules('tgl2', 'Tgl2', 'required');

        if ($this->form_validation->run() == false) {
            $data['tampilpemasukan'] = $this->Kas_model->getAllPemasukan();
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $data['tampilpemasukan'] = $this->Kas_model->cariKasMasukByDate();

            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        }
    }

    public function tambah_pemasukan()
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
            $level = $this->session->userdata('level');
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {

                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pemasukan', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $this->Kas_model->addPemasukan();
            $this->session->set_flashdata('message', 'Di tambahkan');
            redirect('admin/kas_masjid');
        }
    }

    public function edit_pemasukan($unique_code)
    {
        $this->Kas_model->editPemasukan($unique_code);
        $this->session->set_flashdata('message', 'Di Edit');
        redirect('admin/kas_masjid');
    }

    public function delete_pemasukan($unique_code)
    {
        $this->Kas_model->deletePemasukan($unique_code);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('admin/kas_masjid');
    }

    public function pengeluaran()
    {

        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $data['totalpengeluaran'] = $this->Kas_model->getTotalPengeluaran();
        $data['infaq'] = $this->Kas_model->countInfaq();
        $data['zakat'] = $this->Kas_model->countZakat();
        $data['wakaf'] = $this->Kas_model->countWakaf();
        $data['shadaqah'] = $this->Kas_model->countShadaqah();
        $data['isilazis'] = ['infaq', 'shadaqah', 'wakaf', 'zakat'];
        $level = $this->session->userdata('level');

        $this->form_validation->set_rules('tgl1', 'Tgl1', 'required');
        $this->form_validation->set_rules('tgl2', 'Tgl2', 'required');

        if ($this->form_validation->run() == false) {
            $data['tampilpengeluaran'] = $this->Kas_model->getAllPengeluaran();
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pengeluaran', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pengeluaran', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $data['tampilpengeluaran'] = $this->Kas_model->cariKasKeluarByDate();
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pengeluaran', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/kas_masjid/v_pengeluaran', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        }
    }

    public function tambah_pengeluaran()
    {

        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('tgl_km', 'Tgl_km', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_rules('keluar', 'Keluar', 'trim|required');
        $this->form_validation->set_rules('lazis', 'Lazis', 'trim|required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/kas_masjid/v_pengeluaran', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Kas_model->addPengeluaran();
            $this->session->set_flashdata('message', 'Di tambahkan');
            redirect('admin/kas_masjid/pengeluaran');
        }
    }

    public function edit_pengeluaran($unique_code)
    {
        $this->Kas_model->editPengeluaran($unique_code);
        $this->session->set_flashdata('message', 'Di Edit');
        redirect('admin/kas_masjid/pengeluaran');
    }

    public function delete_pengeluaran($unique_code)
    {
        $this->Kas_model->deletePengeluaran($unique_code);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('admin/kas_masjid/pengeluaran');
    }

    public function rekap()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $level = $this->session->userdata('level');
        $this->form_validation->set_rules('tgl1', 'Tgl1', 'required');
        $this->form_validation->set_rules('tgl2', 'Tgl2', 'required');

        if ($this->form_validation->run() == false) {
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/rekap/v_rekap');
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/rekap/v_rekap');
                $this->load->view('templates/admin_footer', $data);
            }
        } else {

            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/rekap/v_rekap');
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/rekap/v_rekap');
                $this->load->view('templates/admin_footer', $data);
            }
        }
    }

    public function print_kas()
    {
        $data['total'] = $this->Kas_model->getSaldo();
        $data['totmasuk'] = $this->Kas_model->getTotalPemasukan();
        $data['totkeluar'] = $this->Kas_model->getTotalPengeluaran();
        $data['rekap'] = $this->Kas_model->getAllKas();
        $data['rekapperiode'] = $this->Kas_model->getAllKasPeriode();
        $this->load->view('admin/rekap/v_rekapsemua', $data);
    }
    public function print_kasperiode()
    {
        $data['tgl1'] = $this->input->post('tgl1');
        $data['tgl2'] = $this->input->post('tgl2');
        $data['total'] = $this->Kas_model->getSaldoPeriode();
        $data['totmasuk'] = $this->Kas_model->getTotalMasukPeriode();
        $data['totkeluar'] = $this->Kas_model->getTotalKeluarPeriode();
        $data['rekapperiode'] = $this->Kas_model->getAllKasPeriode();
        $this->load->view('admin/rekap/v_rekapperiode', $data);
    }
}
