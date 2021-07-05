<?php

if (!defined('BASEPATH')) die('Tidak Boleh Akses Langsung!');

class Statistik_m extends CI_Model
{

    public function penduduk()
    {
        $query = $this->db->query("select * from data_penduduk");
        $hasil = $query->result();
        $query->free_result();
        return $hasil;
    }
}
