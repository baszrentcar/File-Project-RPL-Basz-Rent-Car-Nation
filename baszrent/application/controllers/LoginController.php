<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function aksi_login() {
        $data['username'] = $this->input->post('username');
   		$data['password'] = $this->input->post('password');
		 
		if($this->LoginModel->login($data) == true) {
            $data = $this->LoginModel->getProfile($data['username']);
                if($data['level'] == 'customer') {                         
                    $this->load->view('Home');
                } else if ($data['level'] == "pemilik") {               
                    $this->load->view('Signup');
                }
   			$this->session->set_userdata('username', $this->input->post('username'));
    		$this->session->set_userdata('password', $this->input->post('password'));
		} 
		else {
            redirect('LoginController', $data);
        }
    }
}
