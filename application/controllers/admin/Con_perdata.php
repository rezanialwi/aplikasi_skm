<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_perdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_perdata');
	}

	function index(){
		$this->data['all_perdata'] = $this->mod_perdata->lihat();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_perdata',$this->data);

	}
}