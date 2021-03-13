<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_cetak extends CI_Model {

  public function view_by_date($date){
        $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
        
    return $this->db->join('bagian', 'bagian.id_bagian = responden.id_bagian', 'left')->get('responden')->result();// Tampilkan data responden sesuai tanggal yang diinput oleh user pada filter
  }
    
  public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->join('bagian', 'bagian.id_bagian = responden.id_bagian', 'left')->get('responden')->result(); // Tampilkan data responden sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
  public function view_by_year($year){
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->join('bagian', 'bagian.id_bagian = responden.id_bagian', 'left')->get('responden')->result(); // Tampilkan data responden sesuai tahun yang diinput oleh user pada filter
  }
    
  public function view_all(){
    return $this->db->join('bagian', 'bagian.id_bagian = responden.id_bagian', 'left')->get('responden')->result(); // Tampilkan semua data responden
  }
    
    public function option_tahun(){
        $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tanggal
        $this->db->from('responden'); // select ke tabel responden
        $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}