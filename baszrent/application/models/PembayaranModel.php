<?php

class PembayaranModel extends CI_model
{
    public function addPembayaran()
    {
        //query untuk menambahkan data pembayaran baru di database
        $data = [
            "id_pembayaran" => $this->input->post('id_pembayaran', true),
            "total_harga" => $this->input->post('total_harga', true),
            //"qr_code" => $this->input->post('qr_code', true),
        ];
        $this->db->insert('pembayaran', $data);
    }

    public function getPembayaranById($id_pembayaran)
    {
        //mengambil/memanggil data pembayaran berdasarkan id pembayaran pada database
        $query = $this->db->query("SELECT * FROM mobil WHERE id_pembayaran = '" . $id_pembayaran . "'");
        return $query->row_array();
    }
}
