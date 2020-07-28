<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_umum extends CI_Model {

	protected $_table = 'responden';

	public function lihat(){
		//$this->db->select("(SELECT id_bagian FROM responden WHERE id_bagian = 1) AS id_bagian");
		$query = $this->db->get_where($this->_table, array('id_bagian' => 3));
		return $query->result();
	}

	//public function kode_pidana(){
	//	$kodepidana = $this->db->query('SELECT id_bagian FROM responden WHERE id_bagian=1');
	//	return $kodepidana->result();
	//}

	//function show_pidana(){
	//	$hasilpidana=$this->db->query('SELECT * FROM RESPONDEN');
	//	return $hasilpidana;
	//	$this->load->view('admin/admin_pidana');
	//}
}