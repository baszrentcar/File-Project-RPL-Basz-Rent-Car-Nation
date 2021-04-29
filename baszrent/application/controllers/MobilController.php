<?php

class MobilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load HomeModel
        $this->load->model('MobilModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List Mobil';
        $data['user'] = $this->session->userdata('user');

        $data['mobil'] = $this->MobilModel->getAllMobil();
        //print_r($data['mobil']);
        $this->load->view('templates/header', $data);
        $this->load->view('home.php', $data);
        $this->load->view('templates/footer');
    }

    public function update($id_mobil)
    {
        $data['judul'] = 'Form Edit Mobil';
        $data['mobil'] = $this->MobilModel->getAllMobil();

        $this->form_validation->set_rules('nama_mobil', 'nama_mobil', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('plat_nomor', 'plat_nomor', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('penumpang', 'penumpang', 'required');
        $this->form_validation->set_rules('bagasi', 'bagasi', 'required');

        $config['upload_path']          = './assets/images/mobil';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');

        $file = $this->upload->data();
        $gambar = $file['file_name'];

        $add = [
            "nama_mobil" => $this->input->post('nama_mobil', true),
            "harga" => $this->input->post('harga', true),
            "warna" => $this->input->post('warna', true),
            "plat_nomor" => $this->input->post('plat_nomor', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "Penumpang" => $this->input->post('penumpang', true),
            "Bagasi" => $this->input->post('bagasi', true),
            "photo" => $gambar
        ];
        if ($this->form_validation->run() != false) {
            $this->MobilModel->editMobil($id_mobil, $add);
            redirect('MobilController');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('Mobil/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function Save()
    {
        $data['judul'] = 'Form Add Mobil';
        $data['mobil'] = $this->MobilModel->getAllMobil();

        $this->form_validation->set_rules('nama_mobil', 'nama_mobil', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('plat_nomor', 'plat_nomor', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('penumpang', 'penumpang', 'required');
        $this->form_validation->set_rules('bagasi', 'bagasi', 'required');

        $config['upload_path']          = './assets/images/mobil';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');

        $file = $this->upload->data();
        $gambar = $file['file_name'];

        $add = [
            "id_mobil" => '',
            "nama_mobil" => $this->input->post('nama_mobil', true),
            "harga" => $this->input->post('harga', true),
            "warna" => $this->input->post('warna', true),
            "plat_nomor" => $this->input->post('plat_nomor', true),
            "status" => 'Tersedia',
            "deskripsi" => $this->input->post('deskripsi', true),
            "Penumpang" => $this->input->post('penumpang', true),
            "Bagasi" => $this->input->post('bagasi', true),
            "photo" => $gambar
        ];
        if ($this->form_validation->run() != false) {
            $this->MobilModel->addMobil($add);
            redirect('MobilController');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('Mobil/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($id_mobil)
    {
        $this->MobilModel->deleteMobil($id_mobil);
        redirect('MobilController');
    }

    public function generateId($nama_mobil)
    {
        //id mengubah string menjadi array
        //new untuk mengambil huruf pertama tiap kata. misal 'toyota avanza' -> 'ta'
        //count untuk menghitung berapa id 'ta' di database

        $id = explode(' ', $nama_mobil);
        $new = substr($id[0], 0, 1);
        if (strlen($id > 1)) {
            for ($i = 1; strlen($id); $i++) {
                $new = $new . substr($id[$i], 0, 1);
            }
        }
        $count = $this->MobilModel->countId($new);
        return $new . $count;
    }
}
