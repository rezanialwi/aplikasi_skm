<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pidana extends CI_Model {

	protected $_table = 'responden';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function kode_pidana(){
		$kodepidana = $this->db->query('SELECT id_bagian FROM responden WHERE id_bagian=1');
		return $kodepidana->result();
	}

	function show_pidana(){
		$hasilpidana=$this->db->query('SELECT * FROM RESPONDEN');
		return $hasilpidana;
		$this->load->view('admin/admin_pidana');
	}
}