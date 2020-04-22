<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PasienModel');
		$this->load->model('KampusModel');
		$this->load->library('pagination');
	}

	public function index()
	{
		// Configuration Pagination
		$config['base_url'] = site_url('pasien/index');
		$config['total_rows'] = $this->db->count_all('pasien');
		$config['per_page'] = 10;
		$config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Styling Pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $content['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $content['pasien'] = $this->PasienModel->get_pasien_list($config["per_page"], $content['page']);
        $content['pagination'] = $this->pagination->create_links();

		$content['kampus'] = $this->KampusModel->get_all();
		$this->load->view('navbar');
		$this->load->view('patientView',$content);
		$this->load->view('footer');
	}

	public function pasien_data()
	{
		$data = $this->PasienModel->get_all();
		echo json_encode($data);
	}

	public function tambahPasien()
	{
		$data = array (
			'namaPasien' => $this->input->post('namaPasien'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tglLahir' => $this->input->post('tglLahir'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'kampusAsal' => $this->input->post('kampusAsal'),
			'kondisi' => $this->input->post('kondisi'),
		);

		// Update Angka ke Kampus
		$kampus = $this->KampusModel->get_kampus_nama($data['kampusAsal']);
		if ($data['kondisi'] == "Positif") {
			$kampus['jumlahTerjangkit']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "Sembuh") {
			$kampus['jumlahSembuh']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "Meninggal") {
			$kampus['jumlahMeninggal']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "ODP") {
			$kampus['jumlahODP']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "PDP") {
			$kampus['jumlahPDP']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "ODR") {
			$kampus['jumlahODR']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		}

		$cek = $this->PasienModel->insert_pasien($data);
		if ($cek && $cek2) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Ditambah');
		}
		echo json_encode($data);
		redirect('pasien','refresh');
	}

	public function updatePasien($id)
	{
		// Ambil data lama
		$pasien = $this->PasienModel->get_pasien_id($id);
		$kampus = $this->KampusModel->get_kampus_nama($pasien['kampusAsal']);
		if ($pasien['kondisi'] == "Positif") {
			$kampus['jumlahTerjangkit']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "Sembuh") {
			$kampus['jumlahSembuh']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "Meninggal") {
			$kampus['jumlahMeninggal']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "ODP") {
			$kampus['jumlahODP']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "PDP") {
			$kampus['jumlahPDP']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "ODR") {
			$kampus['jumlahODR']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		}

		$data = array (
			'namaPasien' => $this->input->post('namaPasien'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tglLahir' => $this->input->post('tglLahir'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'kampusAsal' => $this->input->post('kampusAsal'),
			'kondisi' => $this->input->post('kondisi'),
		);

		// Update Angka ke Kampus
		$kampus = $this->KampusModel->get_kampus_nama($data['kampusAsal']);
		if ($data['kondisi'] == "Positif") {
			$kampus['jumlahTerjangkit']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "Sembuh") {
			$kampus['jumlahSembuh']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "Meninggal") {
			$kampus['jumlahMeninggal']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "ODP") {
			$kampus['jumlahODP']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "PDP") {
			$kampus['jumlahPDP']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($data['kondisi'] == "ODR") {
			$kampus['jumlahODR']++;
			$cek2 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		}

		$cek = $this->PasienModel->update_pasien($id,$data);
		if ($cek && $cek2 && $cek3) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Diupdate');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Diupdate');
		}
		echo json_encode($data);
		redirect('pasien','refresh');
	}

	public function hapusPasien($id_pasien)
	{
		// Ambil data lama
		$pasien = $this->PasienModel->get_pasien_id($id_pasien);
		$kampus = $this->KampusModel->get_kampus_nama($pasien['kampusAsal']);
		if ($pasien['kondisi'] == "Positif") {
			$kampus['jumlahTerjangkit']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "Sembuh") {
			$kampus['jumlahSembuh']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "Meninggal") {
			$kampus['jumlahMeninggal']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "ODP") {
			$kampus['jumlahODP']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "PDP") {
			$kampus['jumlahPDP']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		} elseif ($pasien['kondisi'] == "ODR") {
			$kampus['jumlahODR']--;
			$cek3 = $this->KampusModel->update_kampus($kampus['id'], $kampus);
		}

		$cek = $this->PasienModel->delete_pasien($id_pasien);
		if ($cek) {
			$this->session->set_flashdata('info', 'Pasien Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('info', 'Pasien Gagal Dihapus');
		}
		echo json_encode($data);
		redirect('pasien','refresh');
	}
}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */