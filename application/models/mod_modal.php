<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_modal extends CI_Model {



	function show_responden(){
		$hasil=$this->db->query("SELECT * FROM responden");
		return $hasil;
	}

	/*public function getMaxID(){
		$this->db->select('MAX(id_responden)');
		$this->db->from("responden");
		$query = $this->db->get();
		return ($query->row());
	}*/

	function simpan_responden($id_bagian,$nama_responden,$umur_responden,$jenis_kelamin,$pekerjaan_responden,$pendidikan_responden,$tingkat_kepuasan){
		$hasil=$this->db->query("INSERT INTO responden (id_bagian,nama_responden,umur_responden,jenis_kelamin,pekerjaan_responden,pendidikan_responden,tingkat_kepuasan) VALUES ('$id_bagian','$nama_responden','$umur_responden','$jenis_kelamin','$pekerjaan_responden','$pendidikan_responden','$tingkat_kepuasan')");
		return $hasil;
	}
	/*------------tidak mau------------
private $_table = "responden";

	public $id_responden;
	public $nama_responden;
	public $jenis_kelamin;
	public $umur;
	public $waktu_input;
	public $pekerjaan;
	public $pendidikan;


	/* public function __construct(){
		parent::__construct();
		$this->load->model("mod_model");
	} */

	/*

	public function rules()
    {
        return [
            ['field' => 'nama_responden',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'umur',
            'label' => 'Umur',
            'rules' => 'required']
            
        ];
    }

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ["id_responden" => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->id_responden = uniqid();
		$this->nama_responden = $post["nama_responden"];
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->umur = $post["umur"];
		$this->waktu_input = $post["waktu_input"];
		$this->pekerjaan = $post["pekerjaan"];
		$this->pendidikan = $post["pendidikan"];
		return $this->db->insert($this->_table, $this);
	}

	/* public function InsertData($tabel, $addmodel){
		$res = $this->db->insert($tabel, $addmodel);
		return $res;
	} */

	

}
