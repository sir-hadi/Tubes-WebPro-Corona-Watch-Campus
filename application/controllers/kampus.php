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

	}

}

/* End of file kampus.php */
/* Location: ./application/controllers/kampus.php */