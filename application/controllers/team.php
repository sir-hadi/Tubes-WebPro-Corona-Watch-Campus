<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('teamView');
		$this->load->view('footer');
	}
}
