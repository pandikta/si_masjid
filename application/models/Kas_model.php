<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kas_model extends CI_model
{
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
}
