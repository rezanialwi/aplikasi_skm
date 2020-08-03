<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_perdata extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_perdata');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_perdata'] = $this->mod_perdata->lihat();
		$this->data['total_perdata'] = $this->mod_perdata->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporanperdata', $this->data, 'laporan-survei-perdata');
	} 

}