<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_pidana extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_pidana');
		$this->load->helper('tgl_indo');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_pidana'] = $this->mod_pidana->lihat();
		$this->data['total_pidana'] = $this->mod_pidana->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporanpidana', $this->data, 'laporan-survei-pidana');
	} 

}