<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_survei extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	 function GetResult(){
		
		$senang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Cukup Puas'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Tidak Puas'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}

	function GetResult2(){
		$tgl = date("Y-m-d");
		$senang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Sangat Puas' AND tanggal = '$tgl'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Cukup Puas' AND tanggal = '$tgl'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Tidak Puas' AND tanggal = '$tgl'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}

	function GetResult3(){
		$pidana = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '1' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$hukum = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '2' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$umum = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '3' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$perdata = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '4' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$tipikor = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '5' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$phi = $this->db->query("SELECT count(*) as data FROM responden WHERE id_bagian = '6' and tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$res = array(
			"pidana" => $pidana['data'],
			"hukum" => $hukum['data'],
			"umum" => $umum['data'],
			"perdata" => $perdata['data'],
			"tipikor" => $tipikor['data'],
			"phi" => $phi['data']
		);
		return $res;
	}

	

	
	//public function InsertData($tabel, $data){
	//	$res = $this->db->insert($tabel, $data);
	//	return $res;
	//}

	// public function GetResult2(){
	// 	$hukum = $this->db->query("SELECT * FROM view_hukum")->row_array();
	// 	$perdata = $this->db->query("SELECT * FROM view_perdata")->row_array();
	// 	$phi = $this->db->query("SELECT * FROM view_phi")->row_array();
	// 	$pidana = $this->db->query("SELECT * FROM view_pidana")->row_array();
	// 	$tipikor = $this->db->query("SELECT * FROM view_tipikor")->row_array();
	// 	$umum = $this->db->query("SELECT * FROM view_umum")->row_array();
	// 	$res = array(
	// 		"hukum" => $hukum['data'],
	// 		"perdata" => $perdata['data'],
	// 		"phi" => $phi['data'],
	// 		"pidana" => $pidana['data'],
	// 		"tipikor" => $tipikor['data'],
	// 		"umum" => $umum['data']
	// 	);
	// 	return $res;
	// }

}
