<?php

class PemesananModel extends CI_model
{
    public function addPemesanan()
    {
        // query untuk menambahkan data pemesanan baru di database
        $data = [
            "id_pemesanan" => $this->input->post('id_pemesanan', true),
            "tanggal_pesan" => $this->input->post('tanggal_pesan', true),
            "tanggal_kembali" => $this->input->post('tanggal_kembali', true),
            "id_supir" => $this->input->post('id_supir', true),
        ];
        $this->db->insert('account', $data);
    }

    public function getPemesananById($id_pemesanan)
    {
        //mengambil/memanggil data pemesanan berdasarkan id pemesanan pada database
        $query = $this->db->query("SELECT * FROM pemesanan WHERE id_pemesanan = '" . $id_pemesanan . "'");
        return $query->row_array();
    }
}
