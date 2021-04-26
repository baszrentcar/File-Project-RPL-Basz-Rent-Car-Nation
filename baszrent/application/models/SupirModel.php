<?php

class SupirModel extends CI_model
{
    public function addSupir()
    {
        // //use query builder to insert $data to table "supir"
        $data = [
            "id_supir" => $this->input->post('id_supir', true),
            "nama" => $this->input->post('nama', true),
        ];
        $this->db->insert('supir', $data);
    }

    public function getSupirById($id_supir)
    {
        //get data  based on id 
        $query = $this->db->query("SELECT * FROM supir WHERE id_supir = '" . $id_supir . "'");
        return $query->row_array();
    }
}
