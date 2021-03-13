<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('mod_survei');
	}

	 function index(){
		$con = array(
			"content" => $this->Content()
			);
		$this->load->view('web2', $con);
	}
	public function Result(){
		$con = array(
			"content" => $this->GetResult()
			);
		$this->load->view('web2', $con);	
	}
	private function Content(){
		return $this->load->view('content', array(), true);
	}
	public function GetResult(){
		
		$data = $this->mod_survei->GetResult();
		return $this->load->view('result', $data, true);
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
