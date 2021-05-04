<?php

class MobilModel extends CI_model
{
    public function getAllMobil()
    {
        // mengambil/memanggil semua data mobil yang berada di database
        $query = $this->db->query("SELECT * FROM mobil");
        return $query->result_array();
    }

    public function addMobil($data)
    {
        // menambahkan data baru mobil pada database
        $this->db->insert('mobil', $data);
    }

    public function getMobilById($id_mobil)
    {
        //mengambil/memanggil data mobil berdasarkan id mobil pada database
        $query = $this->db->query("SELECT * FROM mobil WHERE id_mobil = '" . $id_mobil . "'");
        return $query->row_array();
    }

    public function editMobil($id_mobil, $data)
    {
        //mengedit data mobil berdasarkan id mobil yang dipilih
        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil', $data);
    }

    public function deleteMobil($id_mobil)
    {
        //menghapus data mobil pada database berdasarkan idnya
        $this->db->delete('mobil', ['id_mobil' => $id_mobil]);
    }
}
