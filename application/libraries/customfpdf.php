<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'third_party/fpdf/fpdf.php');

class CustomFPDF extends FPDF {

	public function img(){
		$foto = "assets/img/logo/logo.png";
		$pdf->Image($foto);
	}

	public function judul(){
		$pdf->SetFont('Arial', 'B', '14');
		$pdf->Cell(100, 'PENGADILAN NEGERI BANJARMASIN KELAS I A', 'C');
		$pdf->Cell(100, '', 'C');
	}

	public function subjudul(){
		$pdf->SetFont('Arial', '', '12');
		$pdf->Cell(100, 'Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Kalimantan Selatan', 'C');
		$pdf->Cell(100, 'Telp.0511-3352859  Fax. 0511-3353263', 'C');
		$pdf->Cell(100, 'Email: www.pn-banjarmasin.go.id', 'C');
		$pdf->Cell(100, 'Laporan Data Responden', 'C');
	}



	public function getInstance(){
        return new CustomFPDF();
    }

}