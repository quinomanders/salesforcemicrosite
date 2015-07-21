<?php

class Value extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/navbar_value');
		$this->load->view('value');
		$this->load->view('template/footer');
	}
	
	
	
}

