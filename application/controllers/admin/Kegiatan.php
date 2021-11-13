<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Jamaah_model');
        is_logged_in();
    }


    public function index() //pengajian
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Kegiatan";
        $level = $this->session->userdata('level');
        $data['pengajian'] = $this->Kegiatan_model->getAllPengajian();

        if ($level == 'administrator') {
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/kegiatan/v_pengajian', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/pengurus_sidebar', $data);
            $this->load->view('admin/kegiatan/v_pengajian', $data);
            $this->load->view('templates/admin_footer', $data);
        }
    }

    public function tambah_pengajian()
    {
        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'hari' => $this->input->post('hari', true),
            'waktu' => $this->input->post('waktu', true),
            'tanggal' => $this->input->post('tanggal', true),
            'ustadz' => $this->input->post('ustadz', true),
            'tema_kajian' => $this->input->post('tema_kajian', true),
            'tempat' => $this->input->post('tempat', true)
        ];

        $this->Kegiatan_model->addPengajian($data);
        $this->session->set_flashdata('message', 'Ditambahkan');
        redirect('pengajian');
    }

    public function edit_pengajian($unique_code)
    {
        $this->Kegiatan_model->editPengajian($unique_code);
        $this->session->set_flashdata('message', 'Di Edit');
        redirect('pengajian');
    }

    public function delete_pengajian($unique_code)
    {
        $this->Kegiatan_model->deletePengajian($unique_code);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('pengajian');
    }

    public function cetak_pengajian()
    {
        $this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Gagal Cetak');
            redirect('jumat');
        } else {
            $data['pengajian'] = $this->Kegiatan_model->cetak_pengajian();
            $data['bulan'] = $this->input->post('bulan');
            $this->load->view('admin/kegiatan/cetak_pengajian', $data);
        }
    }

    // function get_ajax_galeri()
    // {
    //     $list = $this->Kegiatan_model->get_datatables();
    //     $data = array();
    //     $no = @$_POST['start'];
    //     foreach ($list as $galeri) {
    //         $no++;
    //         $row = array();
    //         $row[] = $no . ".";
    //         $row[] = $galeri->foto
    //             != null ? '<img src="' . base_url('assets/img/galeri/' . $galeri->foto) . '" class="img" style="width:100px">' : null;
    //         $row[] = $galeri->nama_kegiatan;
    //         $row[] = $galeri->tgl;
    //         $row[] = $galeri->keterangan;

    //         // add html for action
    //         $unique_code = $galeri->unique_code;
    //         $row[] = '<div class="form-button-action">
    //             <a href="" data-toggle="modal" data-target="#editpemasukan' . $unique_code . '" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data"> 
    //                 <i class="fa fa-edit"></i>
    //             </a>
    //             <a href="' . site_url('admin/kegiatan/delete_foto/' . $galeri->unique_code) . '"  data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
    //                 <i class="fa fa-times"></i>
    //             </a>
    //         </div>';
    //         $data[] = $row;
    //     }
    //     $output = array(
    //         "draw" => @$_POST['draw'],
    //         "recordsTotal" => $this->Kegiatan_model->count_all(),
    //         "recordsFiltered" => $this->Kegiatan_model->count_filtered(),
    //         "data" => $data,
    //     );
    //     // output to json format
    //     echo json_encode($output);
    // }

    public function foto_kegiatan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Kegiatan";
        $level = $this->session->userdata('level');
        $data['galeri'] = $this->Kegiatan_model->getGaleri();

        if ($level == 'administrator') {
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/kegiatan/v_fotokegiatan', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/pengurus_sidebar', $data);
            $this->load->view('admin/kegiatan/v_fotokegiatan', $data);
            $this->load->view('templates/admin_footer', $data);
        }
    }

    public function tambah_foto()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
            $this->session->set_flashdata('flash', 'File Foto Tidak Ada');
            redirect('galeri');
        } else {
            $config['upload_path']          = './assets/img/galeri';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; //2mb

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('flash', 'Upload Gagal,Ukuran Foto Max 2Mb');
                redirect('galeri');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'unique_code' => $this->input->post('unique_code'),
            'foto' => $foto,
            'nama_kegiatan' => $this->input->post('nama_kegiatan', true),
            'tgl' => $this->input->post('tgl', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];
        $this->db->insert('tb_galeri', $data);
        $this->session->set_flashdata('message', 'Di tambahkan');
        redirect('galeri');
    }

    public function edit_foto($unique_code)
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
            $this->session->set_flashdata('flash', 'File Foto Tidak Ada');
            redirect('galeri');
        } else {
            $config['upload_path']          = './assets/img/galeri';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; //2mb

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('flash', 'Upload Gagal,Ukuran Foto Max 2Mb');
                redirect('galeri');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'unique_code' => $this->input->post('unique_code'),
            'foto' => $foto,
            'nama_kegiatan' => $this->input->post('nama_kegiatan', true),
            'tgl' => $this->input->post('tgl', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];
        $this->db->set('tb_galeri', $data);
        $this->session->set_flashdata('message', 'Di tambahkan');
        redirect('galeri');
    }

    public function delete_foto($unique_code)
    {
        $this->db->delete('tb_galeri', ['unique_code' => $unique_code]);
        $this->session->set_flashdata('message', 'Di Delete');
        redirect('galeri');
    }

    public function petugas_jumat()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Kegiatan";
        $level = $this->session->userdata('level');
        $data['jumat'] = $this->Kegiatan_model->getPetugasJumat();
        $data['imam'] = $this->Jamaah_model->getAllImam();
        $data['khotib'] = $this->Jamaah_model->getAllKhatib();
        $data['muazin'] = $this->Jamaah_model->getAllMuazin();

        if ($level == 'administrator') {
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/kegiatan/v_jumat', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/pengurus_sidebar', $data);
            $this->load->view('admin/kegiatan/v_jumat', $data);
            $this->load->view('templates/admin_footer', $data);
        }
    }

    public function tambah_petugasjumat()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
        $this->form_validation->set_rules('imam', 'imam', 'trim|required');
        $this->form_validation->set_rules('khotib', 'khotib', 'trim|required');
        $this->form_validation->set_rules('muazin', 'muazin', 'trim|required');
        if ($this->form_validation->run() == false) {
            $level = $this->session->userdata('level');
            if ($level == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/kegiatan/v_jumat', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {

                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/pengurus_sidebar', $data);
                $this->load->view('admin/kegiatan/v_jumat', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $this->Kegiatan_model->addPetugasJumat();
            $this->session->set_flashdata('message', 'Di tambahkan');
            redirect('jumat');
        }
    }

    public function edit_petugasjumat($unique_code)
    {
        $this->Kegiatan_model->editPetugasjumat($unique_code);
        $this->session->set_flashdata('message', 'Di Edit');
        redirect('jumat');
    }

    public function delete_petugasjumat($unique_code)
    {
        $this->db->delete('tb_sholat_jumat', ['unique_code' => $unique_code]);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('jumat');
    }

    public function cetak_petugasjumat()
    {
        $this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
        $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Gagal Cetak');
            redirect('jumat');
        } else {
            $data['petugasjumat'] = $this->Kegiatan_model->cetakPetugasjumat();
            $data['bulan'] = $this->input->post('bulan');
            $this->load->view('admin/kegiatan/cetak_petugasjumat', $data);
        }
    }
}
