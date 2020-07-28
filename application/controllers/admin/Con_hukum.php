<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_hukum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_hukum');
	}

	function index(){
		$b['data']=$this->mod_hukum->show_hukum();
		$this->load->view('admin/admin_hukum',$b);
	}
}