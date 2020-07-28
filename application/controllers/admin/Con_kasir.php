<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_kasir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_kasir');
	}

	function index(){
		$this->data['all_kasir'] = $this->mod_kasir->lihat();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_kasir',$this->data);

	}
}