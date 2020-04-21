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
		if (!$this->session->has_userdata('username')) {
			$_SESSION['username'] = "Guest";
		}
		$content['dataPasien'] = $this->HomeModel->get_data_positif();
		$content['dataSembuh'] = $this->HomeModel->get_data_sembuh();
		$content['dataMeninggal'] = $this->HomeModel->get_data_meninggal();
		$content['artikel'] = $this->HomeModel->get_artikel();
		$this->load->view('navbar');
		$this->load->view('homeView',$content);
		$this->load->view('footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */