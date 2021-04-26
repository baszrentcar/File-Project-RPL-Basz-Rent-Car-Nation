<?php

class CustomerModel extends CI_model
{
	public function addCustomer()
	{
		//use query builder to insert $data to table "customer"
		$data = [
			"no_ktp" => $this->input->post('no_ktp', true),
			"nama" => $this->input->post('name', true),
			"email" => $this->input->post('email', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
		];
		$this->db->insert('costumer', $data);
	}

	public function getCustomerByUsername($uname)
	{
		//get data account based on id 
		$query = $this->db->query("SELECT * FROM costumer WHERE username = '" . $uname . "'");
		return $query->row_array();
	}

	public function editCustomer($username, $data)
	{
		$this->db->where('username', $username);
		$this->db->update('costumer', $data);
	}
}
