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
        $data['judul'] = 'Testimoni';
        //$data['user'] = $this->session->userdata('user');
        $data['testimoni'] = $this->TestimoniModel->getAllTestimoni();
        $this->load->view('Testimoni/index', $data);
    }

    public function inputTesti()
    {
        $data['judul'] = 'Tambah Testimoni';
        //$data['user'] = $this->session->userdata('user');
        $this->load->view('Testimoni/inputTesti');
    }

    public function addTesti()
    {
        // set rule username, password, fullname, email  required
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

    public function deleteTesti($id_testimoni)
    {
        $this->TestimoniModel->deleteTestimoni($id_testimoni);
        redirect('TestimoniController');
    }

    public function generateId($nama_user)
    {
        //id mengubah string menjadi array
        //new untuk mengambil huruf pertama tiap kata. misal 'toyota avanza' -> 'ta'
        //count untuk menghitung berapa id 'ta' di database

        $id = explode(' ', $nama_user);
        $new = substr($id[0], 0, 1);
        if (strlen($id > 1)) {
            for ($i = 1; strlen($id); $i++) {
                $new = $new . substr($id[$i], 0, 1);
            }
        }
        $count = $this->TestimoniModel->countId($new);
        return $new . $count;
    }
}
