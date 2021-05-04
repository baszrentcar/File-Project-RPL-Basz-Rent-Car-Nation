<?php

class TestimoniModel extends CI_model
{
    public function getAllTestimoni()
    {
        // get semua data testimoni dari db testimoni
        $query = $this->db->query("SELECT * FROM testimoni JOIN costumer ON testimoni.no_ktp=costumer.no_ktp");
        return $query->result_array();
    }

    public function addTestimoni($data)
    {
        //insert data testimoni ke db testimoni
        $this->db->insert('testimoni', $data);
    }

    public function getTestimoniById($id_testimoni)
    {
        //get data testimoni berdasarkan id_testimoni
        $query = $this->db->query("SELECT * FROM testimoni WHERE id_testimoni = '" . $id_testimoni . "'");
        return $query->row_array();
    }

    public function deleteTestimoni($id_testimoni)
    {
        //hapus data testimoni berdasarkan id_testimoni
        $this->db->delete('testimoni', ['id_testimoni' => $id_testimoni]);
    }
}
