<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienModel extends CI_Model {

	// Get semua data pasien
	public function get_all(){
		return $this->db->get('pasien')->result_array();
	}

	// Get pasien berdasarkan id
	public function get_pasien_id($idPasien){
		$this->db->where('id', $idPasien);
		return $this->db->get('pasien')->row_array();
	}

	// Get pasien berdasarkan jenis kelamin
	public function get_pasien_kelamin($jenisKelamin){
		$this->db->where('jenisKelamin', $jenisKelamin);
		return $this->db->get('pasien')->row_array();
	}

	// Get pasien berdasarkan kampus
	public function get_pasien_kampus($kampusAsal){
		$this->db->where('kampusAsal', $kampusAsal);
		return $this->db->get('pasien')->row_array();
	}

	// Get pasien berdasarkan kondisi
	public function get_pasien_kondisi($kondisi){
		$this->db->where('kondisi', $kondisi);
		return $this->db->get('pasien')->row_array();
	}

	// Memasukkan data pasien
	public function insert_pasien($data){
		return $this->db->insert('pasien', $data);
	}

	// Update data pasien berdasarkan id
	public function update_pasien($idPasien, $data){
		$this->db->where('id', $idPasien);
		return $this->db->update('pasien', $data);
	}

	// Delete data pasien
	public function delete_pasien($idPasien){
		$this->db->where('id', $idPasien);
		return $this->db->delete('pasien');
	}

}

/* End of file PasienModel.php */
/* Location: ./application/models/PasienModel.php */