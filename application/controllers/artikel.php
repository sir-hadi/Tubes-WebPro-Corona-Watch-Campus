<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ArtikelModel');
		$this->load->library('pagination');
	}

	public function index()
	{
		// Configuration Pagination
		$config['base_url'] = site_url('artikel/index');
		$config['total_rows'] = $this->db->count_all('artikel');
		$config['per_page'] = 4;
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
        $content['artikel'] = $this->ArtikelModel->get_artikel_list($config["per_page"], $content['page']);
        $content['pagination'] = $this->pagination->create_links();


		// $content['artikel'] = $this->ArtikelModel->get_all();
		$this->load->view('navbar');
		$this->load->view('articleView',$content);
		$this->load->view('footer');
	}

	public function read($id)
	{
		$content['artikel'] = $this->ArtikelModel->get_artikel_id($id);
		$this->load->view('navbar');
		$this->load->view('readArticleView',$content);
		$this->load->view('footer');
	}

	public function formTulisArtikel()
	{
		$this->load->view('navbar');
		$this->load->view('inputArticleView');
		$this->load->view('footer');
	}

	public function tulisArtikel()
	{
		$data = array (
			'judul' => $this->input->post('judul'),
			'penulis' => $this->input->post('penulis'),
			'isi' => $this->input->post('isi'),
		);
		$cek = $this->ArtikelModel->insert_artikel($data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Kampus Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Kampus Gagal Ditambah');
		}
		redirect('artikel','refresh');
	}

	public function formEditArtikel($id)
	{
		$content['artikel'] = $this->ArtikelModel->get_artikel_id($id);
		$this->load->view('navbar');
		$this->load->view('editArticleView',$content);
		$this->load->view('footer');
	}

	public function editArtikel($id)
	{
		$data = array (
			'judul' => $this->input->post('judul'),
			'penulis' => $this->input->post('penulis'),
			'isi' => $this->input->post('isi'),
		);
		$cek = $this->ArtikelModel->update_artikel($id, $data);
		if ($cek) {
			$this->session->set_flashdata('info', 'Kampus Berhasil Ditambah');
		} else {
			$this->session->set_flashdata('info', 'Kampus Gagal Ditambah');
		}
		redirect('artikel','refresh');
	}

	public function hapusArtikel($id_artikel)
	{
		$this->ArtikelModel->delete_artikel($id_artikel);
		redirect('artikel','refresh');
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */