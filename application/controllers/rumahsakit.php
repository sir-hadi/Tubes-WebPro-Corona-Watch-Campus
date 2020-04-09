<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rumahsakit extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('RumahSakitModel');
	}

	public function index()
	{
		
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */