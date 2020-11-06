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
            redirect('admin/pengguna');
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
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['usertampil'] = $this->User_model->getUserById($id);
        $data['level'] = ['Administrator', 'Bendahara'];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
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
            redirect('admin/pengguna');
        }
    }

    public function delete_pengguna($id)
    {
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('admin/pengguna');
    }
}
