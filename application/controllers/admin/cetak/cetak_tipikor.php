<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_tipikor extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_tipikor');
	}

	public function index(){
		$this->load->library('mypdf');
		$this->data['all_tipikor'] = $this->mod_tipikor->lihat();
		$this->data['total_tipikor'] = $this->mod_tipikor->get_total();
		$this->data['no'] = 1;
		$this->mypdf->generate('laporan/laporantipikor', $this->data, 'laporan-survei-tipikor');
	} 

}