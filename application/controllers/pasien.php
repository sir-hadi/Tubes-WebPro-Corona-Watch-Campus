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

	public function tambahPasien()
	{
		//$data = array ...
		$this->PasienModel->insert_pasien($data);
		$this->index();
	}

	public function updatePasien()
	{
		//$data = array ...
		$this->PasienModel->update_pasien($data['id_pasien'],$data);
		$this->index();
	}

	public function hapusPasien($id_pasien)
	{
		$this->PasienModel->delete_pasien($id_pasien);
		$this->index();
	}
}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */