<?php

class Solution extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/navbar_solution');
		$this->load->view('solution');
		$this->load->view('template/footer');
	}
	
	
	
}

