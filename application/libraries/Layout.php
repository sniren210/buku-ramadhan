<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	public function Tampilan($tampil,$data = null)
	{
		$this->CI->load->view('global/template/header',$data);
		$this->CI->load->view('global/'.$tampil,$data);
		$this->CI->load->view('global/template/footer');
	}
}