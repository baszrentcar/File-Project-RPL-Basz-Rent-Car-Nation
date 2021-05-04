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
        $this->load->view('inputTesti');
        $data['judul'] = 'Testimoni';
        //$data['user'] = $this->session->userdata('user');
        $data['testimoni'] = $this->TestimoniModel->getAllTestimoni();
        $this->load->view('Testimoni/index', $data);
    }

	// implementasi usecase add testimoni
    // menginputkan testimoni baru pada database
    public function inputTesti()
    {
        $data['judul'] = 'Tambah Testimoni';
        //$data['user'] = $this->session->userdata('user');
        $this->load->view('Testimoni/inputTesti');
    }

    // menambahkan testimoni baru
    public function addTesti()
    {
        // set rule username, password, fullname, email  required
        // mengset user yang menginputkan testimoni
        $data['user'] = $this->session->userdata('user');

        $this->form_validation->set_rules('pesan', 'pesan', 'required');
        $add = [
            "id_testimoni" => '',
            "no_ktp" => 'dump',
            "pesan" => $this->input->post('pesan', true),
            "rating" => ''
        ];
        // if form_valid gagal 
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Testimoni';
            //$this->load->view('templates/header', $data);
            $this->load->view('Testimoni/inputTesti');
            //$this->load->view('templates/footer');
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
