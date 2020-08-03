<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_tipikor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_tipikor');
	}

	function index(){
		$this->data['all_tipikor'] = $this->mod_tipikor->lihat();
		//$this->data['kode_tipikor'] = $this->mod_tipikor->kode_tipikor();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_tipikor->show_tipikor();
		$this->load->view('admin/tampil_tipikor', $this->data);

	}
}