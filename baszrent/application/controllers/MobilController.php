<?php

class MobilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load MobilModel
        $this->load->model('MobilModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'List Mobil';
        $data['user'] = $this->session->userdata('user');
        //menyimpan data mobil di variable data['mobil']
        $data['mobil'] = $this->MobilModel->getAllMobil();
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
	
	//implementasi usecase edit mobil
    public function update($id_mobil)
    {
        //edit/update data mobil yang ada di db mobil berdasarkan id_mobil
        $data['judul'] = 'Form Edit Mobil';
        $data['mobil'] = $this->MobilModel->getAllMobil();

        //set rule form data mobil (data tidak boleh kosong)
        $this->form_validation->set_rules('nama_mobil', 'nama_mobil', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('plat_nomor', 'plat_nomor', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('penumpang', 'penumpang', 'required');
        $this->form_validation->set_rules('bagasi', 'bagasi', 'required');

        //untuk upload image dari folder di komputer
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

        //menyimpan data mobil dari view di variable add
        $add = [
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
            //jika data tidak kosong, panggil panggil model
            $this->MobilModel->editMobil($id_mobil, $add);
            redirect('MobilController');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('Mobil/index', $data);
            $this->load->view('templates/footer');
        }
    }
	
	//implementasi usecase add mobil
    public function Save()
    {
        //untuk add data mobil baru
        $data['judul'] = 'Form Add Mobil';
        $data['mobil'] = $this->MobilModel->getAllMobil();

        //set rule form data mobil (data tidak boleh kosong)
        $this->form_validation->set_rules('nama_mobil', 'nama_mobil', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('plat_nomor', 'plat_nomor', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('penumpang', 'penumpang', 'required');
        $this->form_validation->set_rules('bagasi', 'bagasi', 'required');

        //untuk upload image dari folder di komputer
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

        //menyimpan data mobil dari view di variable add
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
            //jika data tidak kosong, panggil panggil model
            $this->MobilModel->addMobil($add);
            redirect('MobilController');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('Mobil/index', $data);
            $this->load->view('templates/footer');
        }
    }
	
	//implementasi usecase delete mobil
    public function delete($id_mobil)
    {
        //menghapus data mobil berdasarkan id_mobil
        $this->MobilModel->deleteMobil($id_mobil);
        redirect('MobilController');
    }
}
