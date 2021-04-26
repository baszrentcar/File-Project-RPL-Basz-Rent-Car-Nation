<?php

class PemesananController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load 
        $this->load->model('PemesananModel');
    }

    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('Pemesanan/index.php', $data);
    }
}
