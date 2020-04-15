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
		$data = $this->PasienModel->get_all();
		$this->load->view('navbar');
		// $this->load->view('paisenView',$data);
		$this->load->view('footer');
	}

}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */