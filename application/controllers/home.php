<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function index()
	{
		$data = $this->HomeModel->get_data_positif();
		$this->load->view('navbar');
		$this->load->view('homeView',$data);
		$this->load->view('footer');
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */