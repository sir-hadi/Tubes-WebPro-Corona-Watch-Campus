<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PasienModel');
	}

	public function index()
	{
		
	}

}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */