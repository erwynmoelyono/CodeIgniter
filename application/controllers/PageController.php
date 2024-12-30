<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{

	public function index()
	{
		echo "This is Home URL";
	}

	public function about()
	{
		echo "This is about us page";
	}
	public function blog($var = '')
	{
		echo "$var";

		$this->load->view("blog_view");

	}

	public function demo()
	{
		// $data["title"] = "Hello, Im Funda of web IT";

		$this->load->model('Student_model');
		$title = $this->Student_model->demo();

		$data["title"] = $title;
		$data["body"] = "This is body";
		$this->load->view("demo", $data);

	}



}
