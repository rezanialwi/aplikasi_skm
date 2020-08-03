<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_tipikor extends CI_Model {

	protected $_table = 'view_tipikor';

	

	public function lihat(){
		//$this->db->select("(SELECT id_bagian FROM responden WHERE id_bagian = 1) AS id_bagian");
		//$query = $this->db->get_where($this->_table, array('id_bagian' => 1));
		//return $query->result();
		$query = $this->db->get($this->_table);
		return $query->result();
	}
	public function get_total(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}
	//public function kode_tipikor(){
	//	$kodetipikor = $this->db->query('SELECT id_bagian FROM responden WHERE id_bagian=1');
	//	return $kodetipikor->result();
	//}

	//function show_tipikor(){
	//	$hasiltipikor=$this->db->query('SELECT * FROM RESPONDEN');
	//	return $hasiltipikor;
	//	$this->load->view('admin/admin_tipikor');
	//}
}