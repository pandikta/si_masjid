<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['usertampil'] = $this->User_model->getAlluser();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/v_pengguna', $data);
        $this->load->view('templates/admin_footer');
    }

    public function add_pengguna()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['usertampil'] = $this->User_model->getAlluser();

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/v_addpengguna', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->User_model->addUser();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('pengguna');
        }
    }

    //utk cek kesamaan username
    public function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'Username telah digunakan');
        if ($this->User_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit_pengguna($id)
    {
        $id = decrypt_url($id);
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['usertampil'] = $this->User_model->getUserById($id);
        $data['level'] = ['Administrator', 'Bendahara'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/v_editpengguna', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->User_model->editUser($id);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('pengguna');
        }
    }

    public function delete_pengguna($id)
    {
        $id = decrypt_url($id);
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('pengguna');
    }

    public function toggle($id)
    {
        $id = decrypt_url($id);
        $status = $this->User_model->getUserById($id)['is_active'];
        $toggle = $status ? 0 : 1;
        $this->db->set('is_active', $toggle);
        $this->db->where('id', $id);
        $this->db->update('tb_pengguna');
        $this->session->set_flashdata('message', 'Di Aktif/Nonaktifkan');
        redirect('pengguna');
    }

    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $username = $this->session->userdata('username');
        $divisi = $this->session->userdata('divisi');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            if ($divisi == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/v_profile', $data);
                $this->load->view('templates/admin_footer', $data);
            } else if ($divisi = 'bendahara') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/v_profile', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/pengurus_sidebar', $data);
                $this->load->view('admin/v_profile', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $nama = $this->input->post('nama');
            $this->db->set('nama', $nama);
            $this->db->where('username', $username);
            $this->db->update('tb_pengguna');

            $this->session->set_flashdata('message', 'Di Edit');
            redirect('profile');
        }
    }

    public function reset_pass($id)
    {
        $id = decrypt_url($id);
        $password_hash = password_hash(1234, PASSWORD_DEFAULT);

        $this->db->set('password', $password_hash);
        $this->db->where('id', $id);
        $this->db->update('tb_pengguna');
        $this->session->set_flashdata('message', 'Di Ubah');
        redirect('pengguna');
    }

    public function ubah_katasandi()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $divisi = $this->session->userdata('divisi');
        $this->form_validation->set_rules('passLama', 'Kata Sandi Lama', 'required|trim');
        $this->form_validation->set_rules('passBaru', 'Kata Sandi Baru', 'required|trim');
        $this->form_validation->set_rules('konfir_pass', 'Konfirmasi Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            if ($divisi == 'administrator') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/admin_sidebar', $data);
                $this->load->view('admin/v_ubahsandi', $data);
                $this->load->view('templates/admin_footer', $data);
            } else if ($divisi = 'bendahara') {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/bendahara_sidebar', $data);
                $this->load->view('admin/v_ubahsandi', $data);
                $this->load->view('templates/admin_footer', $data);
            } else {
                $this->load->view('templates/admin_header');
                $this->load->view('templates/admin_topbar');
                $this->load->view('templates/pengurus_sidebar', $data);
                $this->load->view('admin/v_ubahsandi', $data);
                $this->load->view('templates/admin_footer', $data);
            }
        } else {
            $passLama = $this->input->post('passLama');
            $passBaru = $this->input->post('passBaru');
            $konfir_pass = $this->input->post('konfir_pass');
            if (!password_verify($passLama, $data['user']['password'])) {
                $this->session->set_flashdata('flash', 'Kata Sandi Salah!');
                redirect('katasandi');
            } else {
                if ($passLama == $passBaru) {
                    $this->session->set_flashdata('flash', 'Kata Sandi Baru Tidak Boleh Sama');
                    redirect('katasandi');
                } else if ($passBaru !== $konfir_pass) {
                    $this->session->set_flashdata('flash', 'Kata Sandi Tidak Cocok');
                    redirect('katasandi');
                } elseif (strlen($passBaru) < 6) {
                    $this->session->set_flashdata('flash', 'Kata Sandi Minimal Harus 6 Karakter');
                    redirect('katasandi');
                } else {
                    //jika password berhasil di ganti
                    $password_hash = password_hash($passBaru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_pengguna');
                    $this->session->set_flashdata('message', 'Di Ubah');
                    redirect('katasandi');
                }
            }
        }
    }
}
