<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function login($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$cek = $this->db->get('user')->row();
		if ($cek) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */