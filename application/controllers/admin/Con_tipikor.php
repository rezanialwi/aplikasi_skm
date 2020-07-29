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
		$this->data['no'] = 1;
		//$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_tipikor',$this->data);

	}
}