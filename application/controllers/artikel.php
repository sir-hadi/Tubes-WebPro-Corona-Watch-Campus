<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ArtikelModel');
	}

	public function index()
	{
		
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */