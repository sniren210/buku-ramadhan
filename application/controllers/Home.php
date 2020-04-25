<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$get =  array('id_user' =>  $this->session->userdata('username'));
		$data['jadwal'] = $this->jadwal_model->getAll($get);

		$this->layout->Tampilan('home',$data);
	}

	public function tambah()
	{	
		$get =  array('id_user' =>  $this->session->userdata('username'));
		$data['jadwal'] = $this->jadwal_model->get($get);
		$data['penanda'] = $this->session->userdata('penanda');

		// validasi form
		$this->form_validation->set_rules('buku','buku','trim',
			array(	'trim'		=> 'input buku gagal',));
		if ($this->form_validation->run() == false) {
			if ($data['jadwal']) {
				$this->layout->Tampilan('edit',$data);
			}else{
				$this->layout->Tampilan('tambah');
			}
		}else{
			$tambah =  array(
				'id_jadwal' => '',
				 'tanggal' => $this->input->post('tanggal'),
				 'puasa' => $this->input->post('puasa'),
				 'subuh' => $this->input->post('subuh'),
				 'zuhur' => $this->input->post('zuhur'),
				 'ashar' => $this->input->post('ashar'),
				 'magrib' => $this->input->post('magrib'),
				 'isya' => $this->input->post('isya'),
				 'tarawih' => $this->input->post('tarawih'),
				 'duha' => $this->input->post('duha'),
				 'tahajud' => $this->input->post('tahajud'),
				 'buku' => $this->input->post('buku'),
				 'infaq' => $this->input->post('infaq'),
				 'itikaf' => $this->input->post('itikaf'),
				 'id_user' => $this->session->userdata('username')
				); 
			if ($data['jadwal']) {
				$edit =  array(
					'id_jadwal' => $data['jadwal']->id_jadwal,
					 'tanggal' => $this->input->post('tanggal'),
					 'puasa' => $this->input->post('puasa'),
					 'subuh' => $this->input->post('subuh'),
					 'zuhur' => $this->input->post('zuhur'),
					 'ashar' => $this->input->post('ashar'),
					 'magrib' => $this->input->post('magrib'),
					 'isya' => $this->input->post('isya'),
					 'tarawih' => $this->input->post('tarawih'),
					 'duha' => $this->input->post('duha'),
					 'tahajud' => $this->input->post('tahajud'),
					 'buku' => $this->input->post('buku'),
					 'infaq' => $this->input->post('infaq'),
					 'itikaf' => $this->input->post('itikaf'),
					 'id_user' => $this->session->userdata('username')
					); 
			}
			$tambah_coba = array(
			'id_user' => $this->session->userdata('username'),
			'penanda' => 1 );
	
			$tambah_fiks = array(
			'id_user' => $this->session->userdata('username'),
			'penanda' => date('Y-m-d'));
	
			$penanda =  array('penanda' => 1);
			$penanda_fiks =  array('penanda' => date('Y-m-d'));
			if ($this->session->userdata('penanda') == 0 && count($_POST) == 13) {
				$this->jadwal_model->tambah($tambah);
				$this->jadwal_model->tanda($tambah_fiks);

				$this->session->set_userdata($penanda_fiks);
				$this->session->set_flashdata('berhasil','Berhasil mengisi jadwal');
				redirect(base_url('home'));
			}else if($this->session->userdata('penanda') == 0){
				$this->jadwal_model->tambah($tambah);
				$this->jadwal_model->tanda($tambah_coba);

				$this->session->set_userdata($penanda);
				$this->session->set_flashdata('berhasil','Berhasil mengisi jadwal');
				redirect(base_url('home'));
			}else if($this->session->userdata('penanda') == 1 && count($_POST) == 13){
				$this->jadwal_model->edit($edit);
				$this->jadwal_model->tanda($tambah_fiks);

				$this->session->set_userdata($penanda_fiks);
				$this->session->set_flashdata('berhasil','Berhasil mengisi jadwal');
				redirect(base_url('home'));
			}else if($this->session->userdata('penanda') == 1){
				$this->jadwal_model->edit($edit);
				$this->jadwal_model->tanda($tambah_coba);

				$this->session->set_userdata($penanda);
				$this->session->set_flashdata('berhasil','Berhasil mengisi jadwal');
				redirect(base_url('home'));
			}else{
				redirect(base_url('home/tambah'));
			}
		}
		
	}


	public function tentang()
	{
		$this->layout->Tampilan('tentang');
	}
}
