<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_model
{
    public function getAllUser()
    {
        $query = "SELECT * FROM `tb_pengguna`";

        return $this->db->query($query)->result_array();
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('tb_pengguna', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    public function addUser()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => $this->input->post('level'),
        ];

        $this->db->insert('tb_pengguna', $data);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
    }

    public function editUser($id)
    {

        $data = array(
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => $this->input->post('level')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_pengguna', $data);
    }

    public function deleteUser($id)
    {
        $this->db->delete('id', ['id' => $id]);
    }
}
