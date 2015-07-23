<?php

class Whatsnext extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/navbar_whatsnext');
		$this->load->view('whatsnext');
		$this->load->view('template/footer');
	}
	
	
	
}

