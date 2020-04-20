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
		$data = $this->RumahSakitModel->get_all();
		$this->load->view('navbar');
		// $this->load->view('homeView',$data);
		$this->load->view('footer');
	}

	public function tambahRS()
	{
		//$data = array ...
		$this->RumahSakitModel->insert_rumahsakit($data);
		$this->index();
	}

	public function updateRS()
	{
		//$data = array ...
		$this->RumahSakitModel->update_rumahsakit($data['id_rs'],$data);
		$this->index();
	}

	public function hapusRS($id_rs)
	{
		$this->RumahSakitModel->delete_rumahsakit($id_rs);
		$this->index();
	}
}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */