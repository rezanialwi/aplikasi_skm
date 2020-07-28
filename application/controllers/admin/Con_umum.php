<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_umum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_umum');
	}

	function index(){
		$this->data['all_umum'] = $this->mod_umum->lihat();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_umum',$this->data);

	}
}