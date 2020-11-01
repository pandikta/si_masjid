<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jamaah_model extends CI_model
{

    public function getAllImam()
    {
        return $this->db->get('tb_imam')->result_array();
    }

    public function getImamById($id)
    {
        return $this->db->get_where('tb_imam', ['id' => $id])->row_array();
    }

    public function addImam()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')

        ];

        $this->db->insert('tb_imam', $data);
    }

    public function editImam($id)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_imam', $data);
    }

    public function deleteImam($id)
    {
        $this->db->delete('tb_imam', ['id' => $id]);
    }

    public function getAllKhatib()
    {
        return $this->db->get('tb_khatib')->result_array();
    }

    public function addKhatib()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        ];

        $this->db->insert('tb_khatib', $data);
    }

    public function getKhatibById($id)
    {
        return $this->db->get_where('tb_khatib', ['id' => $id])->row_array();
    }
    public function editKhatib($id)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_khatib', $data);
    }

    public function deleteKhatib($id)
    {
        $this->db->delete('tb_khatib', ['id' => $id]);
    }

    public function getAllPengurus()
    {
        return $this->db->get('tb_pengurus')->result_array();
    }

    public function addPengurus()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        ];

        $this->db->insert('tb_pengurus', $data);
    }

    public function getPengurusById($id)
    {
        return $this->db->get_where('tb_pengurus', ['id' => $id])->row_array();
    }

    public function editpengurus($id)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_pengurus', $data);
    }

    public function deletepengurus($id)
    {
        $this->db->delete('tb_pengurus', ['id' => $id]);
    }

    public function getAllMuazin()
    {
        return $this->db->get('tb_muazin')->result_array();
    }
    public function getMuazinById($id)
    {
        return $this->db->get_where('tb_muazin', ['id' => $id])->row_array();
    }

    public function addMuazin()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        ];

        $this->db->insert('tb_muazin', $data);
    }

    public function editMuazin($id)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_muazin', $data);
    }

    public function deleteMuazin($id)
    {
        $this->db->delete('tb_muazin', ['id' => $id]);
    }

    public function getAllRemajaMasjid()
    {
        return $this->db->get('tb_remajamasjid')->result_array();
    }

    public function addRemajaMasjid()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->insert('tb_remajamasjid', $data);
    }

    public function getRemajaById($id)
    {
        return $this->db->get_where('tb_remajamasjid', ['id' => $id])->row_array();
    }

    public function edit_remaja($id)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_remajamasjid', $data);
    }
}
