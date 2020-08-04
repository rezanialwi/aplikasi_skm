<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('mod_admin');
		
	}

	public function index()
	{
		$nilai['total_pesurvei'] = $this->mod_admin->get_total();
		$nilai['total_puas'] = $this->mod_admin->get_totalPuas();
		$nilai['total_cukup'] = $this->mod_admin->get_totalCukup();
		$nilai['total_tidak'] = $this->mod_admin->get_totalTidak();
        // load view admin/overview.php
        $this->load->view("admin/overview", $nilai);
	}

	//public function load_pidana(){
	//	$this->load->view("admin/admin_pidana");
	//}

	//public function get_total(){

	//}
}