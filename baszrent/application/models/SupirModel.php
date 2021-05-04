<?php

class SupirModel extends CI_model
{
    public function addSupir()
    {
        //query untuk menambahkan data supir baru di database
        $data = [
            "id_supir" => $this->input->post('id_supir', true),
            "nama" => $this->input->post('nama', true),
        ];
        $this->db->insert('supir', $data);
    }

    public function getSupirById($id_supir)
    {
        // mengambil/memanggil data supir berdasarkan id supir pada database
        $query = $this->db->query("SELECT * FROM supir WHERE id_supir = '" . $id_supir . "'");
        return $query->row_array();
    }
}
