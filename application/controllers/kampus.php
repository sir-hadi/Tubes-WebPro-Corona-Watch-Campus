<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kampus extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('KampusModel');
		$this->load->model('RumahSakitModel');
	}

	public function index()
	{
		$content['kampus'] = $this->KampusModel->get_all();
		$content['rumahsakit'] = $this->RumahSakitModel->get_all();
		$this->load->view('navbar');
		$this->load->view('campusView',$content);
		$this->load->view('footer');
	}

	public function tambahKampus()
	{
		$data = array (
			'namaKampus' => $this->input->post('namaKampus'),
			'jumlahTerjangkit' => "0",
			'jumlahMeninggal' => "0",
			'jumlahSembuh' => "0",
			'jumlahODP' => "0",
			'jumlahPDP' => "0",
			'jumlahODR' => "0",
			'rsTerdekat' => $this->input->post('rsTerdekat'),
		);
		$cek = $this->KampusModel->insert_kampus($data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Kampus Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Kampus Gagal Ditambah');
		}
		redirect('kampus','refresh');
	}

	public function updateKampus($id)
	{
		$kampus = $this->KampusModel->get_kampus_id($id);
		$data = array (
			'namaKampus' => $this->input->post('namaKampus'),
			'jumlahTerjangkit' => $kampus['jumlahTerjangkit'],
			'jumlahMeninggal' => $kampus['jumlahMeninggal'],
			'jumlahSembuh' => $kampus['jumlahSembuh'],
			'jumlahODP' => $kampus['jumlahODP'],
			'jumlahPDP' => $kampus['jumlahPDP'],
			'jumlahODR' => $kampus['jumlahODR'],
			'rsTerdekat' => $this->input->post('rsTerdekat'),
		);
		$cek = $this->KampusModel->update_kampus($id,$data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Kampus Berhasil Diubah');
		} else {
			$this->session->set_flashdata('info', 'Kampus Gagal Diubah');
		}
		redirect('kampus','refresh');
	}

	public function hapusKampus($id)
	{
		$cek = $this->KampusModel->delete_kampus($id);
		if ($cek) {
			$this->session->set_flashdata('info', 'Kampus Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('info', 'Kampus Gagal Dihapus');
		}
		redirect('kampus','refresh');
	}
}

/* End of file kampus.php */
/* Location: ./application/controllers/kampus.php */