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
	

	 function GetResult(){
		
		$senang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Cukup Puas'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Tidak Puas'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}

	  function GetPie(){
		$query=$this->db->query("SELECT count(*) as data FROM responden WHERE tingkat_kepuasan = 'Sangat Puas'");
		return $query;
		}

		 function get_data_stok(){
        $query = $this->db->query("SELECT * from responden");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


 function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }
		//$total_pesurvei=$this->db->query("SELECT count(id_responden) FROM responden");
		//return $total_pesurvei;
	//}
}