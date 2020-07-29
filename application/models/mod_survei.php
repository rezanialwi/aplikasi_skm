<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_survei extends CI_Model {
	public function GetResult(){
		$tgl = date("Y-m-d");
		$senang = $this->db->query("SELECT count(*) as kepuasan FROM kepuasan WHERE tingkat_kepuasan = 'Sangat puas'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as kepuasan FROM kepuasan WHERE tingkat_kepuasan = 'Cukup puas'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as kepuasan FROM kepuasan WHERE tingkat_kepuasan = 'Kurang puas'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}
	//public function InsertData($tabel, $data){
	//	$res = $this->db->insert($tabel, $data);
	//	return $res;
	//}

}
