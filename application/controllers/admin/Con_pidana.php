<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_pidana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_pidana');
	}

	function index(){
		$this->data['all_pidana'] = $this->mod_pidana->lihat();
		//$this->data['kode_pidana'] = $this->mod_pidana->kode_pidana();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/tampil_pidana', $this->data);

	}
}