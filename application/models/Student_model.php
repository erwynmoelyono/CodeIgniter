<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{

	public function student_data()
	{
		$student_class = $this->student_class();
		return $student_name = "Erwin, his class is " . $student_class;
	}

	private function student_class()
	{
		return $student_class = "1";
	}

	public function student_show($id)
	{
		if ($id === "1") {
			return "User 1";
		} else if ($id === "2") {
			return "User 2";
		}
	}

	public function demo()
	{
		return $title = "Hello, Im Funda of web IT, Im inside model";

	}
}
