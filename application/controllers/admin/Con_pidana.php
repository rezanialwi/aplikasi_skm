<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_pidana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_pidana');
	}

	function index(){
		$a['data']=$this->mod_pidana->show_pidana();
		$this->load->view('admin/admin_pidana',$a);
	}
}