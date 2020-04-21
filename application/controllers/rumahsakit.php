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
		$data = array (
			'namaRs' => $this->input->post('namaRs'),
			'jumlahApd' => $this->input->post('jumlahApd'),
			'kamarTersedia' => $this->input->post('kamarTersedia'),
			'jumlahStaffMedis' => $this->input->post('jumlahStaffMedis'),
		);
		$cek = $this->RumahSakitModel->insert_rumahsakit($data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Ditambah');
		}
		redirect('rumahsakit','refresh');
	}

	public function updateRS($id)
	{
		$data = array (
			'namaRs' => $this->input->post('namaRs'),
			'jumlahApd' => $this->input->post('jumlahApd'),
			'kamarTersedia' => $this->input->post('kamarTersedia'),
			'jumlahStaffMedis' => $this->input->post('jumlahStaffMedis'),
		);
		$cek = $this->RumahSakitModel->update_rumahsakit($id,$data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Diupdate');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Diupdate');
		}
		redirect('rumahsakit','refresh');
	}

	public function hapusRS($id_rs)
	{
		$cek = $this->RumahSakitModel->delete_rumahsakit($id_rs);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Dihapus');
		}
		redirect('rumahsakit','refresh');
	}
}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */