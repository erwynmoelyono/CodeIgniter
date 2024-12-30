<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{

	public function index()
	{
		$this->load->model('Student_model', 'stud');

		// $student = $this->Student_model->student_data();

		// $student = new Student_model;
		// $student = $student->student_data();

		$student = $this->stud->student_data();
		// $student_class = $this->stud->student_class();

		echo 'Student Name : ' . $student;
	}

	public function show($id)
	{
		// echo $id;
		$this->load->model('Student_model');
		$check = $this->Student_model->student_show($id);
		echo $check;
	}
}
