<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_bank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_bank');
	}

	function index(){
		$this->data['all_bank'] = $this->mod_bank->lihat();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_bank',$this->data);

	}
}