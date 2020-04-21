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
		$data = array (
			'namaPasien' => $this->input->post('namaPasien'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tanggalLahir' => $this->input->post('tanggalLahir'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'kampusAsal' => $this->input->post('kampusAsal'),
			'kondisi' => $this->input->post('kondisi'),
		);
		$cek = $this->PasienModel->insert_pasien($data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Ditambah');
		}
		redirect('pasien','refresh');
	}

	public function updatePasien($id)
	{
		$data = array (
			'namaPasien' => $this->input->post('namaPasien'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tanggalLahir' => $this->input->post('tanggalLahir'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'kampusAsal' => $this->input->post('kampusAsal'),
			'kondisi' => $this->input->post('kondisi'),
		);
		$cek = $this->PasienModel->update_pasien($id,$data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Diupdate');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Diupdate');
		}
		redirect('pasien','refresh');
	}

	public function hapusPasien($id_pasien)
	{
		$cek = $this->PasienModel->delete_pasien($id_pasien);
		if ($cek) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Dihapus');
		}
		redirect('pasien','refresh');
	}
}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */