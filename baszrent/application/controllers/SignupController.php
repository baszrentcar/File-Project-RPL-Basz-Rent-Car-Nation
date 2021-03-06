<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CustomerModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Create Account';
        //$data['user'] = $this->session->userdata('user');
        $this->load->view('signup');
    }
	
	//implementasi use case register
    public function signup()
    {
        // set rule username, password, nama, email, no_ktp  required
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required');

        // if form_valid gagal load view Regist
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Sign Up';
            //$this->load->view('templates/header', $data);
            $this->load->view('signup');
            //$this->load->view('templates/footer');
        } else // else berhasil panggil fungsi addAkun di AccountModel
        {
            $this->CustomerModel->addCustomer();

            //panggil fungsi getCustomerByUsername dan simpan di session
            $this->load->library('session');
            $this->session->set_flashdata('user', $this->CustomerModel->getCustomerByUsername($this->input->post('username', true)));
            // load home
            redirect('MobilController');
        }
    }
}
