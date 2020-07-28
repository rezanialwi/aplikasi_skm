<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('mod_admin');
		
	}

	public function index()
	{
		$nilai['data'] = $this->mod_admin->tampil_data()->result();
        // load view admin/overview.php
        $this->load->view("admin/overview", $nilai);
	}

	public function load_pidana(){
		$this->load->view("admin/admin_pidana");
	}
}