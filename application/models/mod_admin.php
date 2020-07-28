<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mod_admin extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('responden');
	}

	function get_total(){
		$total_pesurvei=$this->db->query("SELECT count(id_responden) FROM responden");
		return $total_pesurvei;
	}
}