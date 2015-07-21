<?php

class Outcome extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/navbar_outcome');
		$this->load->view('outcome');
		$this->load->view('template/footer');
	}
	
	
	
}

