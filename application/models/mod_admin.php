<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mod_admin extends CI_Model{
	protected $_table = 'responden';

	function tampil_data(){
		return $this->db->get('responden');
	}

	function get_total(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	function get_totalPuas(){
		$hasil=$this->db->query("SELECT COUNT(id_responden) FROM responden WHERE tingkat_kepuasan='sangat puas' ");
		return $hasil;
	}

	function get_totalCukup(){
		$hasil=$this->db->query("SELECT COUNT(id_responden) FROM responden WHERE tingkat_kepuasan='cukup puas' ");
		return $hasil;
	}

	function get_totalTidak(){
		$hasil=$this->db->query("SELECT COUNT(id_responden) FROM responden WHERE tingkat_kepuasan='tidak puas' ");
		return $hasil;
	}

		//$total_pesurvei=$this->db->query("SELECT count(id_responden) FROM responden");
		//return $total_pesurvei;
	//}
}