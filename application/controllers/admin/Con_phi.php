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
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_phi',$this->data);

	}
}