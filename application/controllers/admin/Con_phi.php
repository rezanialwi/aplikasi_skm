<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_phi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_phi');
	}

	function index(){
		$this->data['all_phi'] = $this->mod_phi->lihat();
		//$this->data['kode_phi'] = $this->mod_phi->kode_phi();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_phi->show_phi();
		$this->load->view('admin/tampil_phi', $this->data);

	}
}