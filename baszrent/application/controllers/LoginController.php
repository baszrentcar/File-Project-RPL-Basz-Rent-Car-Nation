<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CustomerModel');                # Model untuk Login
        $this->load->library('session');
    }

    public function index()
    {

        $this->load->view('view_login');
    }

    public function aksi_login()
    {
        $uname = $this->input->post('username');         # melakukan post terhadap username
        $pass = $this->input->post('password');         # melakukan post terhadap password

        if ($this->CustomerModel->login($uname, $pass) == true) {            # Mengakses fungsi login pada Login Model
            $data = $this->CustomerModel->getCustomerByUsername($uname);    # Untuk mendapatkan semua data di database untuk dibandingkan
            $this->session->set_userdata('user', $data);
            redirect('MobilController');
        } else {
            redirect('LoginController');                # Apabila data tidak ditemukan maka akan load kembali tampilan Login
        }
    }
}
