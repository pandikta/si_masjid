<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {

        //agar saat sudah login, tdk bisa balik ke menu login mnggunakan link
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();
        if ($username) {
            if ($user['level'] == "administrator") {
                redirect('admin/dashboard');
            } elseif ($user['level'] == "bendahara") {
                redirect('bendahara');
            }
        }

        //rules utk form input
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/login_header');
            $this->load->view('admin/v_login');
            $this->load->view('templates/login_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //query kan dlu
        $user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'level' => $user['level']
            ];
            //jika lolos masukkan ke session
            $this->session->set_userdata($data);

            //lalu cek role
            if ($user['level'] == "administrator") {
                $this->session->set_flashdata('masuk', 'Masuk');
                redirect('admin/dashboard');
            } elseif ($user['level'] == "bendahara") {
                $this->session->set_flashdata('masuk', 'Masuk');
                redirect('bendahara');
            }
        } else {
            $this->session->set_flashdata('flash', 'Password/Username Salah');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('keluar', 'Keluar');
        redirect('admin/auth');
    }
}
