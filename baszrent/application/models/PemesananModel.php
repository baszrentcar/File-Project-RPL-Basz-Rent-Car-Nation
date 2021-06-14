<?php

class PemesananModel extends CI_model
{
    public function addPemesanan($data)
    {
        // query untuk menambahkan data pemesanan baru di database

        $this->db->insert('account', $data);
    }

    public function getPemesananById($id_pemesanan)
    {
        //mengambil/memanggil data pemesanan berdasarkan id pemesanan pada database
        $query = $this->db->query("SELECT * FROM pemesanan WHERE id_pemesanan = '" . $id_pemesanan . "'");
        return $query->row_array();
    }
}
