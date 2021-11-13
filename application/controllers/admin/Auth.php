<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
    }

    public function index()
    {

        //agar saat sudah login, tdk bisa balik ke menu login mnggunakan link
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();
        if ($username) {
            if ($user['level'] == "administrator") {
                redirect('dashboard');
            } elseif ($user['level'] == "bendahara") {
                redirect('dashboard');
            } else {
                redirect('dashboard');
            }
        }

        //rules utk form input
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('admin/v_login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek_status = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array('is_active');

        //query kan dlu
        $user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {

            if ($cek_status['is_active'] != 1) {
                $this->session->set_flashdata('flash', 'akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.');
                redirect('login');
            } else {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                //jika lolos masukkan ke session
                $this->session->set_userdata($data);

                //lalu cek role
                if ($user['level'] == "administrator") {
                    $this->session->set_flashdata('masuk', 'Masuk');
                    redirect('dashboard');
                } elseif ($user['level'] == "bendahara") {
                    $this->session->set_flashdata('masuk', 'Masuk');
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('masuk', 'Masuk');
                    redirect('dashboard');
                }
            }
        } else {

            $this->session->set_flashdata('flash', 'Password/Username Salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('keluar', 'Keluar');
        redirect('login');
    }

    public function register()
    {
        //rules utk form input
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_pengguna.username]', ['is_unique' => 'Username telah terdaftar']);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'matches[password]|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/v_register');
        } else {
            $data = [
                //htmlspecial digunakan utk mencegah cross site scripting agar text html tidak muncul di link
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT //FUNGSI ENKRIPSI YG DIMILIKI OLEH PHP
                ),
                'level' => htmlspecialchars($this->input->post('level', true)),
                'created_at' => time(),
                'is_active' => 0
            ];
            $this->db->insert('tb_pengguna', $data);
            redirect('login');
        }
    }
}
