<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KampusModel extends CI_Model {

	// Get semua data kampus
	public function get_all(){
		return $this->db->get('kampus')->result_array();
	}

	// Get kampus berdasarkan id
	public function get_kampus_id($idKampus){
		$this->db->where('id', $idKampus);
		return $this->db->get('kampus')->row_array();
	}

	// Get kampus berdasarkan Rumah Sakit terdekat
	public function get_kampus_rs($rsTerdekat){
		$this->db->where('rsTerdekat', $rsTerdekat);
		return $this->db->get('kampus')->row_array();
	}

	// Memasukkan data kampus
	public function insert_kampus($data){
		return $this->db->insert('kampus', $data);
	}

	// Update data kampus berdasarkan id
	public function update_kampus($idKampus, $data){
		$this->db->where('id', $idKampus);
		return $this->db->update('kampus', $data);
	}

	// Delete data kampus
	public function delete_kampus($idKampus){
		$this->db->where('id', $idKampus);
		return $this->db->delete('kampus');
	}

}

/* End of file KampusModel.php */
/* Location: ./application/models/KampusModel.php */