<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kas_model extends CI_model
{

    // start datatables
    var $column_order = array(null, 'tgl_km', 'keterangan', 'masuk', 'lazis'); //set column field database for datatable orderable
    var $column_search = array('tgl_km', 'keterangan', 'masuk', 'lazis'); //set column field database for datatable searchable
    var $order = array('tgl_km' => 'desc'); // default order 

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('kas_masjid');
        $this->db->where('jenis', 'masuk');
        $i = 0;
        foreach ($this->column_search as $item) { // loop column 
            if (@$_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables()
    {
        $this->_get_datatables_query();
        if (@$_POST['length'] != -1)
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all()
    {
        $this->db->from('kas_masjid');
        return $this->db->count_all_results();
    }
    // end datatables


    public function getAllPemasukan()
    {
        $this->db->order_by('tgl_km', 'DESC');
        return $this->db->get_where('kas_masjid', ['jenis' => 'masuk'])->result_array();
    }

    public function getTotalPemasukan()
    {
        $query = "SELECT SUM(masuk) as tot_masuk FROM kas_masjid";
        return $this->db->query($query)->row_array();
    }

    public function countInfaq()
    {
        $query = "SELECT count(*) as clazis FROM kas_masjid WHERE lazis = 'infaq'";
        return $this->db->query($query)->row_array();
    }

    public function countZakat()
    {
        $query = "SELECT count(*) as clazis FROM kas_masjid WHERE lazis = 'zakat'";
        return $this->db->query($query)->row_array();
    }

    public function countShadaqah()
    {
        $query = "SELECT count(*) as clazis FROM kas_masjid WHERE lazis = 'shadaqah'";
        return $this->db->query($query)->row_array();
    }

    public function countWakaf()
    {
        $query = "SELECT count(*) as clazis FROM kas_masjid WHERE lazis = 'wakaf'";
        return $this->db->query($query)->row_array();
    }

    public function addPemasukan()
    {

        $masuk = $this->input->post('masuk', true);

        //membuang Rp dan Titik
        $masuk_hasil = preg_replace("/[^0-9]/", "", $masuk);

        $data = array(
            'tgl_km' => $this->input->post('tgl_km', true),
            'keterangan' => $this->input->post('keterangan', true),
            'masuk' => $masuk_hasil,
            'keluar' => '0',
            'jenis' => 'masuk',
            'lazis' => $this->input->post('lazis', true)
        );

        $this->db->insert('kas_masjid', $data);
    }
}
