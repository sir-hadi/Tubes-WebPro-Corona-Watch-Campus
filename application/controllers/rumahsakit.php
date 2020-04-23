<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rumahsakit extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('RumahSakitModel');
		$this->load->library('pagination');
	}

	public function index()
	{
		// Configuration Pagination
		$config['base_url'] = site_url('rumahsakit/index');
		$config['total_rows'] = $this->db->count_all('rumahsakit');
		$config['per_page'] = 5;
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
        $content['rumahsakit'] = $this->RumahSakitModel->get_rs_list($config["per_page"], $content['page']);
        $content['pagination'] = $this->pagination->create_links();


		//$data = $this->RumahSakitModel->get_all();
		$this->load->view('navbar');
		$this->load->view('hospitalView',$content);
		$this->load->view('footer');
	}

	public function tambahRS()
	{
		$data = array (
			'namaRs' => $this->input->post('namaRs'),
			'jumlahApd' => $this->input->post('jumlahApd'),
			'kamarTersedia' => $this->input->post('kamarTersedia'),
			'jumlahStaffMedis' => $this->input->post('jumlahStaffMedis'),
		);
		$cek = $this->RumahSakitModel->insert_rumahsakit($data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Ditambah');
		}
		redirect('rumahsakit','refresh');
	}

	public function updateRS($id)
	{
		$data = array (
			'namaRs' => $this->input->post('namaRs'),
			'jumlahApd' => $this->input->post('jumlahApd'),
			'kamarTersedia' => $this->input->post('kamarTersedia'),
			'jumlahStaffMedis' => $this->input->post('jumlahStaffMedis'),
		);
		$cek = $this->RumahSakitModel->update_rumahsakit($id,$data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Diupdate');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Diupdate');
		}
		redirect('rumahsakit','refresh');
	}

	public function hapusRS($id_rs)
	{
		$cek = $this->RumahSakitModel->delete_rumahsakit($id_rs);
		if ($cek) {
			$this->session->set_flashdata('info', 'Rumah Sakit Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('info', 'Rumah Sakit Gagal Dihapus');
		}
		redirect('rumahsakit','refresh');
	}
}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */