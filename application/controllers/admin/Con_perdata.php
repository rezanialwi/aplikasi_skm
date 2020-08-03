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
		//$this->data['kode_perdata'] = $this->mod_perdata->kode_perdata();
		$this->data['no'] = 1;
		//$a['data']=$this->mod_perdata->show_perdata();
		$this->load->view('admin/tampil_perdata', $this->data);

	}
}