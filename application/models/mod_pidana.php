<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pidana extends CI_Model {

	function show_pidana(){
		$hasilpidana=$this->db->query('SELECT * FROM RESPONDEN');
		return $hasilpidana;
		$this->load->view('admin/admin_pidana');
	}
}