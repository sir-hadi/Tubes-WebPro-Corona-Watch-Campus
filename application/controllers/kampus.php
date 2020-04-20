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

	public function tambahKampus()
	{
		//$data = array ...
		$this->KampusModel->insert_kampus($data);
		$this->index();
	}

	public function updateKampus()
	{
		//$data = array ...
		$this->KampusModel->update_kampus($data['id_kampus'],$data);
		$this->index();
	}

	public function hapusKampus($id_kampus)
	{
		$this->KampusModel->delete_kampus($id_kampus);
		$this->index();
	}
}

/* End of file kampus.php */
/* Location: ./application/controllers/kampus.php */