<?php

class PembayaranModel extends CI_model
{
    public function addPembayaran()
    {
        // //use query builder to insert $data to table "pembayaran"
        $data = [
            "id_pembayaran" => $this->input->post('id_pembayaran', true),
            "total_harga" => $this->input->post('total_harga', true),
            //"qr_code" => $this->input->post('qr_code', true),
        ];
        $this->db->insert('pembayaran', $data);
    }

    public function getPembayaranById($id_pembayaran)
    {
        //get data  based on id 
        $query = $this->db->query("SELECT * FROM mobil WHERE id_pembayaran = '" . $id_pembayaran . "'");
        return $query->row_array();
    }
}
