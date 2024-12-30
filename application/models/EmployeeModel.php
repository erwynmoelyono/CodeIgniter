<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeModel extends CI_Model
{

	public function insertEmployee($data)
	{
		$this->db->insert('employee', $data);
	}

	public function getEmployee()
	{
		return $this->db->get('employee')->result();
	}


	public function editEmployee($id)
	{
		return $this->db->get_where('employee', ['id' => $id])->row();
	}

	public function updateEmployee($data, $id)
	{

		$this->db->update('employee', $data, ["id" => $id]);
	}

	public function deleteEmployee($id)
	{
		$this->db->delete('employee', ['id' => $id]);
	}

}

/* End of file EmployeeModel.php */

