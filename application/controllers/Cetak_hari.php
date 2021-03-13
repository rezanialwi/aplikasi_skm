<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_hari extends CI_Controller {
  
   function __construct(){
    parent::__construct();
    	if($this->session->userdata('status')!="telah_login"){
redirect(base_url().'login?alert=belum_login');
}
    $this->load->model('M_cetak');
     $this->load->helper('tgl_indo');
  }
  
   function index(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];
                
                $ket = 'Data Laporan Tanggal '.date('d-m-y', strtotime($tgl));
                $url_cetak = 'cetak_hari/cetak?filter=1&tanggal='.$tgl;
                $transaksi = $this->M_cetak->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di M_cetak
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Laporan Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'cetak_hari/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->M_cetak->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di M_cetak
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Laporan Tahun '.$tahun;
                $url_cetak = 'cetak_hari/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->M_cetak->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di M_cetak
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Survei';
            $url_cetak = 'cetak_hari/cetak';
            $transaksi = $this->M_cetak->view_all(); // Panggil fungsi view_all yang ada di M_cetak
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->M_cetak->option_tahun();

        $this->load->view('lte/v_header');
    $this->load->view('laporan/cetak_hari', $data);
    $this->load->view('lte/v_footer');
  }
  
   function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];
                
                $ket = 'Data Laporan Tanggal '.date('d-m-y', strtotime($tgl));
                $transaksi = $this->M_cetak->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di M_cetak
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Laporan Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->M_cetak->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di M_cetak
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Laporan Tahun '.$tahun;
                $transaksi = $this->M_cetak->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di M_cetak
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Survei';
            $transaksi = $this->M_cetak->view_all(); // Panggil fungsi view_all yang ada di M_cetak
        }
        
        $data['ket'] = $ket;
        $data['transaksi'] = $transaksi;
        
    ob_start();
    $this->load->view('laporan/cetak_hari1', $data);
    // $html = ob_get_contents();
    //     ob_end_clean();
        
    // require 'as/html2pdf/autoload.php'; // Load plugin html2pdfnya
    // $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');  // Settingan PDFnya
    // $pdf->WriteHTML($html);
    // $pdf->Output('Data Survei.pdf', 'D');
  }
}