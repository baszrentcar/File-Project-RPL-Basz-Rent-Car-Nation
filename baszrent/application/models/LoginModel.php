<?php

class LoginModel extends CI_model
{
	public function login($data) {
		$query = $this->db->where('username', $data['username'])->get('pengguna');
		return $query->row_array();
    }

    public function getProfile($username) {
        $query = $this->db->where('username', $username)->get('pengguna');
        return $query->row_array();
    }
}
