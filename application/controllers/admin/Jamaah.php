<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jamaah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Jamaah_model');
        is_logged_in();
    }

    //utk imam
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilimam'] = $this->Jamaah_model->getAllImam();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/jamaah/v_imam', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_imam()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_addimam', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->Jamaah_model->addImam();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('imam');
        }
    }

    public function edit_imam($id)
    {

        $id = decrypt_url($id);

        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilimam'] = $this->Jamaah_model->getImamById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_editimam', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Jamaah_model->editImam($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('imam');
        }
    }

    public function delete_imam($id)
    {
        $id = decrypt_url($id);
        $this->Jamaah_model->deleteImam($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('imam');
    }

    public function khatib()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilkhatib'] = $this->Jamaah_model->getAllKhatib();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/jamaah/v_khatib', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_khatib()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_addkhatib');
            $this->load->view('templates/admin_footer');
        } else {

            $this->Jamaah_model->addKhatib();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('khatib');
        }
    }

    public function edit_khatib($id)
    {

        $id = decrypt_url($id);

        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilkhatib'] = $this->Jamaah_model->getKhatibById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_editkhatib', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Jamaah_model->editKhatib($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('khatib');
        }
    }

    public function delete_khatib($id)
    {
        $id = decrypt_url($id);
        $this->Jamaah_model->deleteKhatib($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('khatib');
    }

    public function pengurus()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilpengurus'] = $this->Jamaah_model->getAllPengurus();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/jamaah/v_pengurus', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_pengurus()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_addpengurus');
            $this->load->view('templates/admin_footer');
        } else {

            $this->Jamaah_model->addPengurus();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('pengurus');
        }
    }

    public function edit_pengurus($id)
    {
        $id = decrypt_url($id);
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilpengurus'] = $this->Jamaah_model->getPengurusById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_editpengurus', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Jamaah_model->editpengurus($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('pengurus');
        }
    }

    public function delete_pengurus($id)
    {
        $id = decrypt_url($id);
        $this->Jamaah_model->deletepengurus($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('pengurus');
    }

    public function muazin()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilmuazin'] = $this->Jamaah_model->getALlMuazin();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/jamaah/v_muazin', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_muazin()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_addmuazin');
            $this->load->view('templates/admin_footer');
        } else {

            $this->Jamaah_model->addMuazin();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('muazin');
        }
    }

    public function edit_muazin($id)
    {
        $id = decrypt_url($id);
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilmuazin'] = $this->Jamaah_model->getMuazinById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_editmuazin', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Jamaah_model->editMuazin($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('muazin');
        }
    }

    public function delete_muazin($id)
    {
        $id = decrypt_url($id);
        $this->Jamaah_model->deleteMuazin($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('muazin');
    }

    public function RemajaMasjid()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilremaja'] = $this->Jamaah_model->getAllRemajaMasjid();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/jamaah/v_remajamasjid', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_remajamasjid()
    {

        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_addremajamasjid');
            $this->load->view('templates/admin_footer');
        } else {

            $this->Jamaah_model->addRemajaMasjid();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('remaja_masjid');
        }
    }

    public function edit_remajamasjid($id)
    {

        $id = decrypt_url($id);
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampilremaja'] = $this->Jamaah_model->getRemajaById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required|max_length[15]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/jamaah/v_editremaja', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Jamaah_model->edit_remaja($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('remaja_masjid');
        }
    }

    public function delete_remajamasjid($id)
    {
        $id = decrypt_url($id);
        $this->Jamaah_model->deleteRemaja($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('remaja_masjid');
    }
}
