<?php

class Journey  extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/navbar_journey');
		$this->load->view('journey');
		$this->load->view('template/footer');
	}
	
	
	
}

