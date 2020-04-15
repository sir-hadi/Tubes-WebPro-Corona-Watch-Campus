<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kampus extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('KampusModel');
	}

	public function index()
	{
		$data = $this->KampusModel->get_all();
		$this->load->view('navbar');
		$this->load->view('campusView',$data);
		$this->load->view('footer');
	}

}

/* End of file kampus.php */
/* Location: ./application/controllers/kampus.php */