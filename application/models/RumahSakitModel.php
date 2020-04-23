<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RumahSakitModel extends CI_Model {

	// Get semua data rumahsakit
	public function get_all(){
		return $this->db->get('rumahsakit')->result_array();
	}

	// Get rumahsakit for Hospital page
	function get_rs_list($limit, $start){
        return $this->db->get('rumahsakit', $limit, $start)->result_array();
    }

	// Get rumahsakit berdasarkan id
	public function get_rumahsakit_id($idRumahSakit){
		$this->db->where('id', $idRumahSakit);
		return $this->db->get('rumahsakit')->row_array();
	}

	// Memasukkan data rumahsakit
	public function insert_rumahsakit($data){
		return $this->db->insert('rumahsakit', $data);
	}

	// Update data rumahsakit berdasarkan id
	public function update_rumahsakit($idRumahSakit, $data){
		$this->db->where('id', $idRumahSakit);
		return $this->db->update('rumahsakit', $data);
	}

	// Delete data rumahsakit
	public function delete_rumahsakit($idRumahSakit){
		$this->db->where('id', $idRumahSakit);
		return $this->db->delete('rumahsakit');
	}

}

/* End of file RumahSakitModel.php */
/* Location: ./application/models/RumahSakitModel.php */