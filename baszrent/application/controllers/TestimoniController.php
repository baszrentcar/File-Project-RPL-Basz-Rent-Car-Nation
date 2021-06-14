<?php

class TestimoniController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TestimoniModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        //mengakses view testimoni
        //$this->load->view('inputTesti');
        $data['judul'] = 'Testimoni';
        $data['user'] = $this->session->userdata('user');
        $data['testimoni'] = $this->TestimoniModel->getAllTestimoni();
        $this->load->view('Testimoni/index', $data);
    }

    // implementasi usecase add testimoni
    // menginputkan testimoni baru pada database
    public function inputTesti()
    {
        $data['judul'] = 'Tambah Testimoni';

        $data['user'] = $this->session->userdata('user');
        $this->load->view('templates/header', $data);
        $this->load->view('Testimoni/inputTesti', $data);
        $this->load->view('templates/footer');
    }

    // menambahkan testimoni baru
    public function addTesti()
    {
        // set rule username, password, fullname, email  required
        // mengset user yang menginputkan testimoni
        $data['user'] = $this->session->userdata('user');

        $this->form_validation->set_rules('pesan', 'pesan', 'required');
        $this->form_validation->set_rules('rating', 'rating', 'required');
        $add = [
            "id_testimoni" => '',
            "no_ktp" => $data['user']['no_ktp'],
            "pesan" => $this->input->post('pesan', true),
            "rating" => $this->input->post('rating', true)
        ];
        // if form_valid gagal 
        if ($this->form_validation->run() == FALSE) {
            redirect('TestimoniController/inputTesti');
        } else // else berhasil panggil fungsi 
        {
            $this->TestimoniModel->addTestimoni($add);
            redirect('TestimoniController');
        }
    }

    // implementasi use case delete testimoni
    // menghapus testimoni di database berdasarkan id testimoni 
    public function deleteTesti($id_testimoni)
    {
        $this->TestimoniModel->deleteTestimoni($id_testimoni);
        redirect('TestimoniController');
    }
}
