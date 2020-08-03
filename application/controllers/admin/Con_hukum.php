<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_hukum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_hukum');
	}

	function index(){
		$this->data['all_hukum'] = $this->mod_hukum->lihat();
		//$this->data['kode_hukum'] = $this->mod_hukum->kode_hukum();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_hukum->show_hukum();
		$this->load->view('admin/tampil_hukum', $this->data);

	}
}