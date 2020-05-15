<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('aboutUsView');
		$this->load->view('footer');
	}

}

/* End of file aboutus.php */
/* Location: ./application/controllers/aboutus.php */