<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect(base_url('home'));
		}else{

			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run() == false) {
		
				$this->load->view('global/login');
			}else{
				$this->log();
			}
		}
	}

	private function log()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$row = $this->db->get_where('user', ['username' => $user])->row_array();

		if ($row) {
			if (password_verify($pass,$row['password'])) {
				$data = [
					'username' => $row['id_user'],
					'penanda' => $row['penanda']
				];
				$this->session->set_userdata($data);
				redirect(base_url('home'));

			}else{
				$this->session->set_flashdata('gagal','Kata sandimu Tidak Cocok');
				redirect(base_url('login'));
			}
		}else{
			$this->session->set_flashdata('gagal','Bukumu tidak dapat ditemukan');
			redirect(base_url('login'));
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('penanda');

		redirect(base_url('login'));
	} 

	public function daftar()
	{
		if ($this->session->userdata('username')) {
			redirect(base_url('home'));
		}

		$this->form_validation->set_rules('username','Username','trim|required|is_unique[user.username]',[
			'required' => 'Isi Dulu !',
			'is_unique' => 'Username Sudah Ada'
		]);
		$this->form_validation->set_rules('password','Password','trim|required',[
			'required' => 'Isi Dulu !'
		]);
		$this->form_validation->set_rules('passconf','Passconf','trim|required|matches[password]',[
			'required' => 'Isi Dulu',
			'matches' => 'password tidak cocok'
		]);

		if ($this->form_validation->run() == false) {

			$this->load->view('global/daftar');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username')),
				'password' => htmlspecialchars(password_hash($this->input->post('password'),PASSWORD_DEFAULT)),
				'profil' => 'default.png',
				'penanda' => '0'
				];
			$this->db->insert('user',$data);

			$this->session->set_flashdata('berhasil', 'Kamu sudah membuat buku');
			redirect(base_url('login'));
		}
	}
}