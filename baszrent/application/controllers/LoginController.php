<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');				# Model untuk Login
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function aksi_login() {
        $data['username'] = $this->input->post('username'); 		# melakukan post terhadap username
   	$data['password'] = $this->input->post('password'); 		# melakukan post terhadap password
		 
	if($this->LoginModel->login($data) == true) {			# Mengakses fungsi login pada Login Model
            $data = $this->LoginModel->getProfile($data['username']);	# Untuk mendapatkan semua data di database untuk dibandingkan
                if($data['level'] == 'customer') {                      # Apabila data yang diinputkan adalah akun milik pelanggan, maka akan masuk ke tampilan Home(test)
                    $this->load->view('Home');				
                } else if ($data['level'] == "pemilik") {              	# Apabila data yang diinputkan adalah akun milik pemilik rental, maka akan masuk ke tampilan Signup(test)
                    $this->load->view('Signup');
                }
   		$this->session->set_userdata('username', $this->input->post('username')); 	# Menambah variabel session untuk username ke dalam server
    		$this->session->set_userdata('password', $this->input->post('password'));	# Menambah variabel session untuk password ke dalam server
		} 
	else {
            redirect('LoginController', $data);				# Apabila data tidak ditemukan maka akan load kembali tampilan Login
        }
    }
}
