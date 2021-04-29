<?php

class TestimoniModel extends CI_model
{
    public function getAllTestimoni()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM testimoni JOIN costumer ON testimoni.no_ktp=costumer.no_ktp");
        return $query->result_array();
    }


    public function addTestimoni($data)
    {
        $this->db->insert('testimoni', $data);
    }

    public function getTestimoniById($id_testimoni)
    {
        //get data testimoni based on id 
        $query = $this->db->query("SELECT * FROM testimoni WHERE id_testimoni = '" . $id_testimoni . "'");
        return $query->row_array();
    }

    public function deleteTestimoni($id_testimoni)
    {
        $this->db->delete('testimoni', ['id_testimoni' => $id_testimoni]);
    }

    public function countId($id)
    {
        $query = $this->db->query("SELECT * FROM testimoni WHERE id_testimoni LIKE '" . $id . "%'");
        return $query->num_rows();
    }
}
