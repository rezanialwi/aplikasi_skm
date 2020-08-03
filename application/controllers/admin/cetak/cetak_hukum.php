<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_hukum extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_hukum');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_hukum'] = $this->mod_hukum->lihat();
		$this->data['total_hukum'] = $this->mod_hukum->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporanhukum', $this->data, 'laporan-survei-hukum');
	} 

}