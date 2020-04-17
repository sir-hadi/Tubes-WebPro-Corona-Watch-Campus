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
		$title = "CWC Homepage";
		$content['dataPasien'] = $this->HomeModel->get_data_positif();
		$content['dataSembuh'] = $this->HomeModel->get_data_sembuh();
		$content['dataMeninggal'] = $this->HomeModel->get_data_meninggal();
		$this->load->view('navbar', $title);
		$this->load->view('homeView',$content);
		$this->load->view('footer');
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */