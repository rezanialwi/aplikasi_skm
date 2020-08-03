<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_umum extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_umum');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_umum'] = $this->mod_umum->lihat();
		$this->data['total_umum'] = $this->mod_umum->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporanumum', $this->data, 'laporan-survei-umum');
	} 

}