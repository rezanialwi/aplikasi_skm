<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_hukum extends CI_Model {

	function show_hukum(){
		$hasilhukum=$this->db->query('SELECT * FROM RESPONDEN');
		return $hasilhukum;
		$this->load->view('admin/admin_hukum');
	}
}