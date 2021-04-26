<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
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
        $data['judul'] = 'Login';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        // username = guest kalo gak login
        // $guest =  array('username' => 'guest', 'role' => -1 );
        // $this->session->set_userdata('user',$guest);

        if ($this->form_validation->run() == false) {
            //$this->load->view('templates/header', $data);
            $this->load->view('Login');

            //$this->load->view('templates/footer');
        } else {
            $uname = $this->input->post('username', true);
            $user = $this->CustomerModel->getCustomerByUsername($uname);
            if ($user) {
                $pass = $this->input->post('password');
                print('here');
                if ($user['password'] == $pass) {
                    $this->session->set_userdata('user', $user);
                    redirect('MobilController');
                } else {
                    redirect('LoginController'); //pass salah
                }
            } else {
                redirect('LoginController'); //email salah
            }
        }
    }
}
