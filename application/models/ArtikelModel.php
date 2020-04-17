<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelModel extends CI_Model {

	// Get semua data artikel
	public function get_all(){
		return $this->db->get('artikel')->result_array();
	}

	// Get artikel berdasarkan id
	public function get_artikel_id($idArtikel){
		$this->db->where('idArtikel', $idArtikel);
		return $this->db->get('artikel')->row_array();
	}

	// Get artikel berdasarkan penulis
	public function get_artikel_penulis($penulis){
		$this->db->where('penulis', $penulis);
		return $this->db->get('artikel')->row_array();
	}

	// Memasukkan data artikel
	public function insert_artikel($data){
		return $this->db->insert('artikel', $data);
	}

	// Update data artikel berdasarkan id
	public function update_artikel($idArtikel, $data){
		$this->db->where('idArtikel', $idArtikel);
		return $this->db->update('artikel', $data);
	}

	// Delete data artikel
	public function delete_artikel($idArtikel){
		$this->db->where('idArtikel', $idArtikel);
		return $this->db->delete('artikel');
	}

}

/* End of file ArtikelModel.php */
/* Location: ./application/models/ArtikelModel.php */