<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_survei extends CI_Model {
	public function GetResult(){
		$tgl = date("Y-m-d");
		$lakilaki = $this->db->query("SELECT count(*) as gen FROM gen WHERE gender = '1'")->row_array();
		$perempuan = $this->db->query("SELECT count(*) as gen FROM gen WHERE gender = '2'")->row_array();

		$senang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '1' AND tanggal = '$tgl'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '2' AND tanggal = '$tgl'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '3' AND tanggal = '$tgl'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
		$jenis_kelamin = array(
			"lakilaki" => $lakilaki['gen'],
			"perempuan" => $perempuan['gen']
			);
		return $jenis_kelamin;
		$umr = array(
			"opsi1" => $opsi1['umur'],
			"opsi2" => $opsi2['umur'],
			"opsi3" => $opsi3['umur'],
			"opsi4" => $opsi4['umur'],
			"opsi5" => $opsi5['umur']
			);
		return $umr;
		$kat = array(
			"pidanatipikor" => $pidanatipikor['kategori'],
			"hukum" => $hukum['kategori'],
			"umumkeuangan" => $umumkeuangan['kategori'],
			"perdataphi" => $perdataphi['kategori'],
			"kasir" => $kasir['kategori'],
			"bank" => $bank['kategori']
			);
		return $kat;
	}
	public function InsertDataKepuasan($tabel, $data){
		$res = $this->db->insert($tabel, $data);
		return $res;
	}
	public function InsertDataGender($tabel, $gen){
		$jenis_kelamin = $this->db->insert($tabel, $gen);
		return $jenis_kelamin;
	}
	public function InsertDataUmur($tabel, $umur){
		$umr = $this->db->insert($tabel, $umur);
		return $umr;
	}
	public function InsertDataKategori($tabel, $kategori){
		$kat = $this->db->insert($tabel, $kategori);
		return $kat;
	}

	

}
