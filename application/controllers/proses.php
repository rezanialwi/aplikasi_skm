<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
	public function AddSurveiGender(){
		$gen = array(
			
			"gender" => $_POST['get']
		);
		$this->mod_survei->InsertDataGender('gen', $gen);
	}

	public function AddSurveiUmur(){
		$umur = array(
			
			"nilaiumur" => $_POST['get']
		);
		$this->mod_survei->InsertDataUmur('umur', $umur);
	}

	public function AddSurveiKategori(){
		$kategori = array(
			
			"nilaikategori" => $_POST['get']
		);
		$this->mod_survei->InsertDataKategori('kategori', $kategori);
	}
}
