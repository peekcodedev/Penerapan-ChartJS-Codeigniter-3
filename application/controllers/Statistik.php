<?php

if (!defined('BASEPATH')) die('Tidak Boleh Akses Langsung!');

class Statistik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('statistik_m');
    }

    public function index()
    {
        $data['stat'] = $this->statistik_m->penduduk();
        $this->load->view('statistikjs', $data);
    }
}
