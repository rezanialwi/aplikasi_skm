<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_phi extends CI_Model {

	protected $_table = 'view_phi';

	

	public function lihat(){
		//$this->db->select("(SELECT id_bagian FROM responden WHERE id_bagian = 1) AS id_bagian");
		//$query = $this->db->get_where($this->_table, array('id_bagian' => 1));
		//return $query->result();
		$query = $this->db->get($this->_table);
		return $query->result();
	}
	public function get_total(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	 function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	  function get_product_keyword($keyword){
      // $this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left');
    	$this->db->join('bagian', 'bagian.id_bagian = responden.id_bagian', 'left');
		$this->db->where('responden.id_bagian', '6');	
		$this->db->like('nama_responden',$keyword);
      $this->db->or_like('umur_responden',$keyword);
      $this->db->or_like('jenis_kelamin',$keyword);
      $this->db->or_like('pekerjaan_responden',$keyword);
      $this->db->or_like('pendidikan_responden',$keyword);
      $this->db->or_like('saran',$keyword);
      $this->db->or_like('tingkat_kepuasan',$keyword);
      $this->db->or_like('tanggal',$keyword);
			return $this->db->get('responden')->result();
		}

		//cari & pagging
function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      
	return $this->db->get($this->_table)->result();
  }
  
  
     function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get($this->_table);

    return $query->num_rows();
  }
}