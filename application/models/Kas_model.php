<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kas_model extends CI_model
{

    // start datatables utk pemasukan
    // var $column_order = array(null, 'tgl_km', 'keterangan', 'masuk', 'lazis'); //set column field database for datatable orderable
    // var $column_search = array('tgl_km', 'keterangan', 'masuk', 'lazis'); //set column field database for datatable searchable
    // var $order = array('tgl_km' => 'desc'); // default order 

    // private function _get_datatables_query()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_kas');
    //     $this->db->where('jenis', 'masuk');
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
    //     $this->db->from('tb_kas');
    //     return $this->db->count_all_results();
    // }
    // // end datatables


    public function getAllPemasukan()
    {
        $this->db->order_by('tgl_km', 'DESC');
        return $this->db->get_where('tb_kas', ['jenis' => 'masuk'])->result_array();
    }

    public function getTotalPemasukan()
    {
        $query = "SELECT SUM(masuk) as tot_masuk FROM tb_kas";
        return $this->db->query($query)->row_array();
    }

    public function getSaldo()
    {
        $query = "SELECT SUM(masuk) - sum(keluar) as saldo FROM tb_kas";
        return $this->db->query($query)->row_array();
    }

    public function countInfaq()
    {
        $query = "SELECT count(*) as clazis FROM tb_kas WHERE lazis = 'infaq'";
        return $this->db->query($query)->row_array();
    }

    public function countZakat()
    {
        $query = "SELECT count(*) as clazis FROM tb_kas WHERE lazis = 'zakat'";
        return $this->db->query($query)->row_array();
    }

    public function countShadaqah()
    {
        $query = "SELECT count(*) as clazis FROM tb_kas WHERE lazis = 'shadaqah'";
        return $this->db->query($query)->row_array();
    }

    public function countWakaf()
    {
        $query = "SELECT count(*) as clazis FROM tb_kas WHERE lazis = 'wakaf'";
        return $this->db->query($query)->row_array();
    }

    public function cariKasMasukByDate()
    {
        $tgl1 = $this->input->post('tgl1', true);
        $tgl2 = $this->input->post('tgl2', true);

        $query = "SELECT * FROM tb_kas WHERE jenis = 'masuk' AND tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->result_array();
    }

    public function cariKasKeluarByDate()
    {
        $tgl1 = $this->input->post('tgl1', true);
        $tgl2 = $this->input->post('tgl2', true);

        $query = "SELECT * FROM tb_kas WHERE jenis = 'keluar' AND tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->result_array();
    }

    public function addPemasukan()
    {

        $masuk = $this->input->post('masuk', true);

        //membuang Rp dan Titik
        $masuk_hasil = preg_replace("/[^0-9]/", "", $masuk);

        $data = array(
            'unique_code' => $this->input->post('unique_code', true),
            'tgl_km' => $this->input->post('tgl_km', true),
            'keterangan' => $this->input->post('keterangan', true),
            'masuk' => $masuk_hasil,
            'keluar' => '0',
            'jenis' => 'masuk',
            'lazis' => $this->input->post('lazis', true),
            'created_at' => date("Y-m-d H:i:s"),
            'username' => $this->input->post('username', true)
        );

        $this->db->insert('tb_kas', $data);
    }

    public function editPemasukan($unique_code)
    {
        $masuk = $this->input->post('masuk', true);
        //membuang Rp dan Titik
        $masuk_hasil = preg_replace("/[^0-9]/", "", $masuk);

        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'tgl_km' => $this->input->post('tgl_km', true),
            'keterangan' => $this->input->post('keterangan', true),
            'masuk' => $masuk_hasil,
            'keluar' => '0',
            'jenis' => 'masuk',
            'lazis' => $this->input->post('lazis', true)
        ];
        $this->db->where('unique_code', $unique_code);
        $this->db->update('tb_kas', $data);
    }

    public function deletePemasukan($unique_code)
    {
        $this->db->delete('tb_kas', ['unique_code' => $unique_code]);
    }

    public function getAllPengeluaran()
    {
        $this->db->order_by('tgl_km', 'DESC');
        return $this->db->get_where('tb_kas', ['jenis' => 'keluar'])->result_array();
    }

    public function getTotalPengeluaran()
    {
        $query = "SELECT SUM(keluar) as tot_keluar FROM tb_kas";
        return $this->db->query($query)->row_array();
    }

    public function addPengeluaran()
    {
        $keluar = $this->input->post('keluar', true);
        //buat rp dan titik
        $keluar_hasil = preg_replace("/[^0-9]/", "", $keluar);

        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'tgl_km' => $this->input->post('tgl_km', true),
            'keterangan' => $this->input->post('keterangan', true),
            'masuk' => '0',
            'keluar' => $keluar_hasil,
            'jenis' => 'keluar',
            'lazis' => $this->input->post('lazis', true),
            'created_at' => date("Y-m-d H:i:s"),
            'username' => $this->input->post('username', true)
        ];

        $this->db->insert('tb_kas', $data);
    }

    public function editPengeluaran($unique_code)
    {
        $keluar = $this->input->post('keluar', true);
        //buat rp dan titik
        $keluar_hasil = preg_replace("/[^0-9]/", "", $keluar);

        $data = [
            'unique_code' => $this->input->post('unique_code', true),
            'tgl_km' => $this->input->post('tgl_km', true),
            'keterangan' => $this->input->post('keterangan', true),
            'masuk' => '0',
            'keluar' => $keluar_hasil,
            'jenis' => 'keluar',
            'lazis' => $this->input->post('lazis', true)
        ];
        $this->db->where('unique_code', $unique_code);
        $this->db->update('tb_kas', $data);
    }

    public function deletePengeluaran($unique_code)
    {
        $this->db->delete('tb_kas', ['unique_code' => $unique_code]);
    }

    public function getJumlahKas()
    {
        $query = "SELECT (sum(masuk)-sum(keluar)) as tot_kas FROM tb_kas";
        return $this->db->query($query)->row_array();
    }

    public function getJumlahJan()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total1 FROM tb_kas WHERE MONTH(tgl_km)=1 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahFeb()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total2 FROM tb_kas WHERE MONTH(tgl_km)=2 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahMar()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total3 FROM tb_kas WHERE MONTH(tgl_km)=3 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahApr()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total4 FROM tb_kas WHERE MONTH(tgl_km)=4 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahMei()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total5 FROM tb_kas WHERE MONTH(tgl_km)=5 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahJun()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total6 FROM tb_kas WHERE MONTH(tgl_km)=6 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahJul()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total7 FROM tb_kas WHERE MONTH(tgl_km)=7 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahAug()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total8 FROM tb_kas WHERE MONTH(tgl_km)=8 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahSep()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total9 FROM tb_kas WHERE MONTH(tgl_km)=9 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahOkt()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total10 FROM tb_kas WHERE MONTH(tgl_km)=10 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahNov()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total11 FROM tb_kas WHERE MONTH(tgl_km)=11 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getJumlahDes()
    {
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as total12 FROM tb_kas WHERE MONTH(tgl_km)=12 AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }

    public function getAllKas()
    {

        $query = "SELECT * FROM tb_kas ORDER BY tgl_km DESC";
        return $this->db->query($query)->result_array();
    }

    public function getAllKasPeriode()
    {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');
        $query = "SELECT * FROM tb_kas WHERE tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->result_array();
    }
    public function getTotalMasukPeriode()
    {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');
        $query = "SELECT SUM(masuk) as tot_masuk FROM tb_kas WHERE tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->row_array();
    }
    public function getTotalKeluarPeriode()
    {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');
        $query = "SELECT SUM(keluar) as tot_keluar FROM tb_kas WHERE tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->row_array();
    }

    public function getSaldoPeriode()
    {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');
        $query = "SELECT SUM(masuk) - SUM(keluar) as saldo_periode FROM tb_kas WHERE tgl_km BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_km DESC";
        return $this->db->query($query)->row_array();
    }

    public function getKasPerBulan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $query = "SELECT * FROM tb_kas WHERE MONTH(tgl_km)= '$bulan' AND YEAR(tgl_km) = '$tahun'ORDER BY tgl_km DESC";
        return $this->db->query($query)->result_array();
    }

    public function getSaldoperBulan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $query = "SELECT (SUM(masuk)-SUM(keluar)) as saldo FROM tb_kas WHERE MONTH(tgl_km)= '$bulan' AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }

    public function getSaldoMasukPerBulan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $query = "SELECT SUM(masuk) as tot_masuk FROM tb_kas WHERE MONTH(tgl_km)= '$bulan' AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
    public function getSaldoKeluarPerBulan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $query = "SELECT SUM(keluar) as tot_keluar FROM tb_kas WHERE MONTH(tgl_km)= '$bulan' AND YEAR(tgl_km) = '$tahun'";
        return $this->db->query($query)->row_array();
    }
}
