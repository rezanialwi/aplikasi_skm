<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {
	public function GetResult(){
		$data = $this->mod_survei->GetResult();
		return $this->load->view('admin/overview', $data, true);
	}

	/*public function AddSurveiGender(){
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
	}*/
}
