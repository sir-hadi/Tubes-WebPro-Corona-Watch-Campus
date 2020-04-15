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
		$data = $this->ArtikelModel->get_all();
		$this->load->view('navbar');
		$this->load->view('articleView',$data);
		$this->load->view('footer');
	}

	public function tulisArtikel()
	{
		//function to insert new article. No page yet

		// $data = array ...
		// $this->ArtikelModel->insert_artikel($data);
		// $this->index();
	}

	public function editArtikel()
	{
		//function to edit an article. No page yet
	}

	public function hapusArtikel($id_artikel)
	{
		$this->ArtikelModel->delete_artikel($id_artikel);
		$this->index();
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */