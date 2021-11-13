<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kotaksaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Jamaah_model');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Kegiatan";
        $level = $this->session->userdata('level');
        $data['saran'] = $this->db->get('tb_saran')->result_array();

        if ($level == 'administrator') {
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/v_kotaksaran', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/pengurus_sidebar', $data);
            $this->load->view('admin/v_kotaksaran', $data);
            $this->load->view('templates/admin_footer', $data);
        }
    }

    public function delete_saran($id)
    {
        $id = decrypt_url($id);
        $this->db->delete('tb_saran', ['id' => $id]);
        $this->session->set_flashdata('message', 'Di Hapus');
        redirect('kotaksaran');
    }
}
