<?php

class PemesananController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load 
        $this->load->model('PemesananModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('Pemesanan/index.php', $data);
    }

    public function pesan($id_mobil)
    {
        $data['user'] = $this->session->userdata('user');
        $data['judul'] = 'Pemesanan';
        $add = [
            "id_pemesanan" => '',
            "id_supir" => '',
            "id_mobil" => $id_mobil,
            "no_ktp" => $data['user']['no_ktp'],
            "tanggal_pesan" => $this->input->post('tanggal_pesan', true),
            "tanggal_kembali" => $this->input->post('tanggal_kembali', true),

        ];
        $this->PemesananModel->addPemesanan($add);
        redirect('PembayaranController');
    }
}
