<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_phi extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_phi');
		$this->load->helper('tgl_indo');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_phi'] = $this->mod_phi->lihat();
		$this->data['total_phi'] = $this->mod_phi->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporanphi', $this->data, 'laporan-survei-phi');
	} 

}