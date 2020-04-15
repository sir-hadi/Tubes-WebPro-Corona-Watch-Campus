<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	// function__construct() {
	// 	parent::__construct();
	// }

	// Ambil data pasien positif
	public function get_data_positif() {
		$data = 'positif';
		$this->db->where('kondisi', $data);
		return $this->db->get('pasien')->row_array();
	}

}

/* End of file HomeModel.php */
/* Location: ./application/models/HomeModel.php */