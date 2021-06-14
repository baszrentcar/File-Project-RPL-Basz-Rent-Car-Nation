<?php

class CustomerModel extends CI_model
{
	public function getAllCustomer()
	{
		// get semua data customer dari db customer
		$query = $this->db->query("SELECT * FROM costumer");
		return $query->result_array();
	}

	public function login($uname, $pass)
	{
		$query = $this->db->query("SELECT * FROM costumer WHERE username = '" . $uname . "' AND password = '" . $pass . "'");
		return $query->row_array();
	}

	public function addCustomer()
	{
		//insert data customer ke db customer
		$data = [
			"no_ktp" => $this->input->post('no_ktp', true),
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"level" => 'customer'
		];
		$this->db->insert('costumer', $data);
	}

	public function getCustomerByUsername($uname)
	{
		//get data customer berdasarkan username
		$query = $this->db->query("SELECT * FROM costumer WHERE username = '" . $uname . "'");
		return $query->row_array();
	}

	public function getCustomerByKTP($no_ktp)
	{
		//get data customer berdasarkan no. KTP
		$query = $this->db->query("SELECT * FROM costumer WHERE no_ktp = '" . $no_ktp . "'");
		return $query->row_array();
	}

	public function editCustomer($username, $data)
	{
		//edita data customer berdasarkan username
		$this->db->where('username', $username);
		$this->db->update('costumer', $data);
	}

	public function editCustomerByKTP($no_ktp, $data)
	{
		//edita data customer berdasarkan no_ktp
		$this->db->where('no_ktp', $no_ktp);
		$this->db->update('costumer', $data);
	}
}
