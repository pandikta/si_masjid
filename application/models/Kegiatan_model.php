<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_model
{
    public function getAllPengajian()
    {
        return $this->db->get('tb_pengajian')->result_array();
    }

    public function cetak_pengajian()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $query = "SELECT * FROM tb_pengajian WHERE monthname(tanggal) = '$bulan' AND year(tanggal) = '$tahun'";
        return $this->db->query($query)->result_array();
    }

    public function addPengajian($data)
    {
        $this->db->insert('tb_pengajian', $data);
    }

    public function editPengajian($unique_code)
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

        $this->db->where('unique_code', $unique_code);
        $this->db->update('tb_pengajian', $data);
    }

    public function deletePengajian($unique_code)
    {
        $this->db->delete('tb_pengajian', ['unique_code' => $unique_code]);
    }

    public function getPetugasJumat()
    {
        return $this->db->get('tb_sholat_jumat')->result_array();
    }

    public function getPetugasJumatByBulan()
    {
        $bulan = date('F');
        $tahun = date('Y');
        $query = "SELECT * FROM tb_sholat_jumat WHERE monthname(tgl) = '$bulan' AND year(tgl) = '$tahun'";
        return $this->db->query($query)->result_array();
    }

    public function addPetugasJumat()
    {
        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'tgl' => $this->input->post('tgl', true),
            'imam' => $this->input->post('imam', true),
            'khotib' => $this->input->post('khotib', true),
            'muazin' => $this->input->post('muazin', true)
        ];
        $this->db->insert('tb_sholat_jumat', $data);
    }

    public function editPetugasjumat($unique_code)
    {

        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'tgl' => $this->input->post('tgl', true),
            'imam' => $this->input->post('imam', true),
            'khotib' => $this->input->post('khotib', true),
            'muazin' => $this->input->post('muazin', true)
        ];

        $this->db->where('unique_code', $unique_code);
        $this->db->update('tb_sholat_jumat', $data);
    }

    public function cetakPetugasjumat()
    {

        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $query = "SELECT * FROM tb_sholat_jumat WHERE monthname(tgl) = '$bulan' AND year(tgl) = '$tahun'";
        return $this->db->query($query)->result_array();
    }

    public function getGaleri()
    {
        $this->db->order_by('tgl', 'desc');
        return $this->db->get('tb_galeri')->result_array();
    }

    //start datatables utk galeri
    // var $column_order = array('foto', 'nama_kegiatan', 'tgl', 'keterangan'); //set column field database for datatable orderable
    // var $column_search = array('foto', 'nama_kegiatan', 'tgl', 'keterangan'); //set column field database for datatable searchable
    // var $order = array('tgl' => 'desc'); // default order 

    // private function _get_datatables_query()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_galeri');
    //     $i = 0;
    //     foreach ($this->column_search as $item) { // loop column 
    //         if (@$_POST['search']['value']) { // if datatable send POST for search
    //             if ($i === 0) { // first loop
    //                 $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    //                 $this->db->like($item, $_POST['search']['value']);
    //             } else {
    //                 $this->db->or_like($item, $_POST['search']['value']);
    //             }
    //             if (count($this->column_search) - 1 == $i) //last loop
    //                 $this->db->group_end(); //close bracket
    //         }
    //         $i++;
    //     }

    //     if (isset($_POST['order'])) { // here order processing
    //         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } else if (isset($this->order)) {
    //         $order = $this->order;
    //         $this->db->order_by(key($order), $order[key($order)]);
    //     }
    // }
    // function get_datatables()
    // {
    //     $this->_get_datatables_query();
    //     if (@$_POST['length'] != -1)
    //         $this->db->limit(@$_POST['length'], @$_POST['start']);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }
    // function count_all()
    // {
    //     $this->db->from('tb_galeri');
    //     return $this->db->count_all_results();
    // }
    // // end datatables
}
