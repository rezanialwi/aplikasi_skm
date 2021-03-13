<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsesModal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('mod_modal');
	}

	function index(){
		$x['data']=$this->mod_modal->show_responden();		
		//$x["id"] = $this->mod_model->getMaxID();
        //$x["id"] += 1; //nambahkan + 1 nya d sini 
       $this->load->view('web',$x);
	}

	function simpan_responden(){
		$id_bagian=$this->input->post('id_bagian');
		$nama_responden=$this->input->post('nama_responden');
		$umur_responden=$this->input->post('umur_responden');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$pekerjaan_responden=$this->input->post('pekerjaan_responden');
		$pendidikan_responden=$this->input->post('pendidikan_responden');
		$saran=$this->input->post('saran');
		$tanggal=$this->input->post('tanggal');
		$tingkat_kepuasan=$this->input->post('tingkat_kepuasan');
		$sis = $this->mod_modal->simpan_responden($id_bagian,$nama_responden,$umur_responden,$jenis_kelamin,$pekerjaan_responden,$pendidikan_responden,$saran,$tanggal,$tingkat_kepuasan);
		// redirect('prosesmodal/alert');
		if(!$sis ){
		echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
		} else{echo "<script>alert('Terimakasih untuk Partisipasinya :)');history.go(-1);</script>";
		
		}
			}

	
	// function alert(){
	
    //    $this->load->view('alert_selesai');
	// }









	/*-----------------------tidak mau---------------------------

	public function __construct(){
		parent::__construct();
		$this->load->model("mod_model");
		$this->load->library('form_validation');
	}

	public function index(){
		$data['responden'] = $this->mod_model->getAll();
	}

	public function add(){
		$responden = $this->mod_model;
		$validation = $this->form_validation;
		$validation->set_rules($responden->rules());

		if ($validation->run()){
			$responden->save();
			$this->session->set_flashdata('success', 'Berhasil Disimpan!');
		}

	}
	/* public function AddDataModel(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y-m-d");
		$addmodel = array(
			"nama_responden" => $_POST['get'],
			"umur"			=> $_POST['get'],
			"jenis_kelamin" => $_POST['get'],
			"pekerjaan"		=> $_POST['get'],
			"pendidikan"	=> $_POST['get'],
			"waktu_input"	=> $tgl,
			"tingkat_kepuasan" => $_POST['get']
		);
		$this->mod_model->InsertData('responden', $addmodel);
	}*/
}
