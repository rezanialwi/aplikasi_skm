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
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_hukum',$this->data);

	}
}