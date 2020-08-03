<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){

        $pdf = new FPDF('L', 'mm', 'Letter');
        //membuat halaman baru
        $pdf->AddPage();
        //setting jenis font
        $pdf->SetFont('Arial', 'B', '14');
        //mencetak string
        $pdf->Cell(0,7,'PENGADILAN NEGERI BANJARMASIN KELAS I A',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial', '', '14');
        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(10,6,'Kode Bagian',1,0,'C');
        $pdf->Cell(50,6,'Nama',1,0,'C');
        $pdf->Cell(10,6,'Umur',1,0,'C');
        $pdf->Cell(20,6,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(30,6,'Pekerjaan',1,0,'C');
        $pdf->Cell(30,6,'Pendidikan',1,0,'C');
        $pdf->Cell(30,6,'Tingkat Kepuasan',1,0,'C');
        $pdf->Cell(50,6,'Waktu Input',1,0,'C');

        $pdf->SetFont('Arial', '', '10');
        $responden = $this->db->get('responden')->result();
        $no=0;
        foreach ($responden as $data) {
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(8,6,$data->id_bagian,1,0,'C');
            $pdf->Cell(50,6,$data->nama_responden,1,0,'C');
            $pdf->Cell(10,6,$data->umur_responden,1,0,'C');
            $pdf->Cell(20,6,$data->jenis_kelamin,1,0,'C');
            $pdf->Cell(30,6,$data->pekerjaan_responden,1,0,'C');
            $pdf->Cell(30,6,$data->pendidikan_responden,1,0,'C');
            $pdf->Cell(30,6,$data->tingkat_kepuasan,1,0,'C');
            $pdf->Cell(50,6,$data->waktu_input,1,0,'C');
            $no++;
        }


        $pdf->Output('I', 'laporan_pidana.pdf');


       /* $qry = $this->db->query("SELECT * FROM responden WHERE id_bagian = '1'");
// echo $query;
return $qry;

        // buat objek untuk MyPDF
$pdf = new WidianFPDF;

// set header laporan
$img = 'img/logo.png';
$judul = [
  'PENGADILAN NEGERI BANJARMASIN KELAS I A'
];

$subjudul = [
  'Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Kalimantan Selatan',
  'Telp.0511-3352859  Fax. 0511-3353263',
  'Email: www.pn-banjarmasin.go.id',
  'Laporan Data Pegawai'
];


$pdf->setHeader($img, $judul, $subjudul);
// set table laporan
$header_table = [
  'no' => [35, 'NO', 'C'],
  'id_bagian' => [40, 'Kode Bagian' , 'C'],
  'nama_responden' => [25, 'Nama' , 'C'],
  'umur_responden' => [25, 'Umur' , 'C'],
  'jenis_kelamin' => [30, 'Jenis Kelamin' , 'C'],
  'pekerjaan_responden' => [45, 'Pekerjaan' , 'C'],
  'pendidikan_responden' => [25, 'Pendidikan' , 'C'],
  'tingkat_kepuasan' => [25, 'Tingkat Kepuasan','C'],
  'waktu_input' => [25, 'Waktu Input','C']
];

// atur table
$pdf->setTable($header_table, $qry->fetchAll());

$pdf->setAfterTable('Sekretaris Pengadilan Negeri Banjarmasin');
$pdf->SetAutoPageBreak(TRUE, 0);

// tampilkan laporan
$pdf->Output();*/
}
}