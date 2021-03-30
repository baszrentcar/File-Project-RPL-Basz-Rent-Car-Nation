<?php

class MobilModel extends CI_model
{
    public function getAllMobil()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM mobil");
        return $query->result_array();
    }

    public function addMobil($data)
    {
        $this->db->insert('mobil', $data);
    }

    public function getMobilById($id_mobil)
    {
        //get data mobil based on id 
        $query = $this->db->query("SELECT * FROM mobil WHERE id_mobil = '" . $id_mobil . "'");
        return $query->row_array();
    }

    public function editMobil($id_mobil, $data)
    {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil', $data);
    }

    public function deleteMobil($id_mobil)
    {
        $this->db->delete('mobil', ['id_mobil' => $id_mobil]);
    }

    public function countId($id)
    {
        $query = $this->db->query("SELECT * FROM mobil WHERE id_mobil LIKE '" . $id . "%'");
        return $query->num_rows();
    }
}
