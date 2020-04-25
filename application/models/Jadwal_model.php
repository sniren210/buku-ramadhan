<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

		// Edit 
	public function edit($data) {
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->update('jadwal', $data);
	}

	public function tambah($data)
	{
		$this->db->insert('jadwal',$data);
	}

	public function get($data)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_user',$data['id_user']);
		$this->db->where('tanggal',date('Y-m-d'));
		$query = $this->db->get();
		return $query->row();
	}

	public function getAll($data)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_user',$data['id_user']);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tanda($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);
	}


}