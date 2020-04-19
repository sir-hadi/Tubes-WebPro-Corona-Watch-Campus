<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	// Ambil data pasien positif
	public function get_data_positif() {
		$data = 'Positif';
		$this->db->where('kondisi', $data);
		return $this->db->get('pasien')->result_array();
	}

	// Ambil data sembuh
	public function get_data_sembuh() {
		$data = 'Sembuh';
		$this->db->where('kondisi', $data);
		return $this->db->get('pasien')->result_array();
	}

	// Ambil data meninggal
	public function get_data_meninggal() {
		$data = 'Meninggal';
		$this->db->where('kondisi', $data);
		return $this->db->get('pasien')->result_array();
	}

	// Ambil data artikel
	public function get_artikel() {
		return $this->db->get('artikel')->result_array();
	}

}

/* End of file HomeModel.php */
/* Location: ./application/models/HomeModel.php */