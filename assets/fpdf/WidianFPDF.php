<?php

// require main class

require_once 'fpdf.php';

// make child class of FPDF
class WidianFPDF extends FPDF
{
  public $header = [
    'img' => '',
    'title1' => 'Judul Laporan 1',
    'subtitle1' => 'Sub Judul Laporan 1',
    'subtitle2' => 'Sub Judul Laporan 2',
    'subtitle3' => 'Sub Judul Laporan 3',
    'subtitle4' => 'Sub Judul Laporan 4',
  ];

  public $orientation = 'L';

  public $date = [
    'months' => [
      'Januari',
      'Pebruari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    ],
    'days' => [
      'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jum\'at',
      'Sabtu',
      'Minggu'
    ]
  ];

  public function rupiah($angka) 
  {
    $huruf = strval($angka);
    $huruf_pertama = substr($huruf, 0, 1);
    $huruf_sisanya = substr($huruf, 1);

    $jumlah_sisa = strlen($huruf_sisanya);
    $sementara = [];
    // $i = 0;
    while ($jumlah_sisa >= 3) {
      $sementara[] = '.' . substr($huruf_sisanya, $jumlah_sisa-3, 3);
      // if($jumlah_sisa <= 3)
      $huruf_sisanya = substr($huruf_sisanya, 0, $jumlah_sisa-3);
      $jumlah_sisa = strlen($huruf_sisanya);
    }

    $rupiah = 'Rp. ' . $huruf_pertama . $huruf_sisanya . join('', array_reverse($sementara));

    return $rupiah;
  }

  public function Header()
  {
    // set margin 
    $this->SetMargins(10, 20);
    $this->SetAutoPageBreak(1, 20);
  }

  // Page footer
  public function Footer()
  {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial', 'I', 10);
    // Page number
    $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');

    $this->AliasNbPages();
  }

  public function setHeader($img, $title, $subtitle)
  {
    // add page
    $this->AddPage($this->orientation);

    $this->header['img'] = $img;
    $this->header['title1'] = $title[0];
    $this->header['subtitle1'] = $subtitle[0];
    $this->header['subtitle2'] = $subtitle[1];
    $this->header['subtitle3'] = $subtitle[2];
    $this->header['subtitle4'] = $subtitle[3];

    // add logo
    $this->Image($this->header['img'], 10, 9, 30);

    $this->SetFont('Arial', 'B', 18);
    /* Move to the right */
    $this->Ln(5);
    $this->Cell(20);

    // $this->Cell(70, 10, 'Page Heading', 1, 0, 'C');
    $this->Cell(0, 8, $this->header['title1'], 0, 1, 'C');
    $this->Cell(20);
    $this->Ln(2);

    $this->SetFont('Arial', '', 14);
    $this->Cell(20);
    $this->Cell(0, 6, $this->header['subtitle1'], 0, 1, 'C');
    $this->Cell(20);
    $this->Cell(0, 6, $this->header['subtitle2'], 0, 1, 'C');
    $this->Cell(20);
    $this->Cell(0, 6, $this->header['subtitle3'], 0, 1, 'C'); 
    $this->Ln(10);
    $this->Cell(0, 0.5, '', 1, 1);
    $this->Ln(5);
    $this->Cell(0.5);
    $this->Cell(0, 5, $this->header['subtitle4'], 0, 1, 'C');
    $this->Ln(5);
  }

  public function setPage($orientation)
  {
    $this->orientation = $orientation;
  }

  public function setCell($w, $h, $x, $t, $l, $a, $f)
  {
    if(!$a) {
      $a = 'L';
    }

    if($f) {
      $t = $this->rupiah($t);
    }

    $len = strlen($t);

    $cw = floor($w / 2);

    $cw = $cw > 1 ? $cw : 15;

    if ($len > $cw) {
      $txt = str_split($t, $cw);
      // $hs = [];
      // $hgh = $h / $l + 7;
      $height = $h / $l + 3;
      foreach ($txt as $i => $text) {
        $hs = $height * ($i) + ($height + ($i * 3));
        $this->SetX($x);

        $y = $this->GetY() + $hs;
        if ($y > 190) continue;
        $this->Cell($w, $hs, $text, '', '', $a);
      }

      // $this->SetX($x);
      // $this->Cell($w, $first, $txt[0], '', '', '');

      // $y = $this->GetY();
      // $this->SetX($x);
      // $this->Cell($w, $hs + 4, $y, '', '', '');
      $this->SetX($x);
      $this->Cell($w, $h, '', 'LTRB', 0, $a, 0);
    } else {
      $this->SetX($x);
      $this->Cell($w, $h, $t, 'LTRB', 0, $a, 0);
    }
  }

  public function setTable($tableHeader, $tableBody)
  {
    // insert Number field to table header
    // $tableHeader = array_unshift($tableHeader, ['no' => [5, 'No']]);

    // render table header
    $this->SetFont('Arial', 'B', 9);

    // add cell for number counter
    $this->Cell(10, 10, 'No', 1, 0, 'C');
    foreach ($tableHeader as $field) {
      $this->Cell($field[0], 10, $field[1], 1, 0, 'C');
    }

    // add line break
    $this->Ln();

    // render table body
    $this->SetFont('Arial', '', 9);

    // atur tinggi table cell secara dimanik

    foreach ($tableBody as $i => $data) {
      // add number counter
      $line = 1;
      $cellHeight = 8;

      foreach ($tableHeader as $keyname => $field) {
        $cellWidth = $field[0];
        $cw = floor($cellWidth / 2);
        $cw = $cw > 1 ? $cw : 15;
        $text = str_split($data[$keyname], $cw);
        $txtlen = count($text);

        if ($txtlen > $line) {
          $line = $txtlen;
          $cellHeight *= $line;
        }
      }

      $this->Cell(10, $cellHeight, $i + 1, 1, 0, 'C');
      foreach ($tableHeader as $keyname => $field) {
        $x = $this->GetX();
        // if(@$field[3]) {
        //   echo $field[3];
        //   die();
        // }
        $this->setCell($field[0], $cellHeight, $x, $data[$keyname], $line, @$field[2], @$field[3]);
      }

      // add line break
      $this->Ln();
    }

    $total_data = count($tableBody);

    // menambahkan total data
    $this->Ln(5);
    $this->SetFont('Arial', 'B', 11);
    $this->Cell(40, 10, "Total Data: $total_data", 0, 1, 'L');
  }

  public function setTotalData($total_data, $x = 30)
  {
    $this->SetFont('Arial', '', 11);

    foreach ($total_data as $jenis => $total) {
      if ($total == 0) continue;
      $this->SetX($x);
      $this->Cell(40, 6, $jenis . ' : ' . $total, 0, 1);
    }
  }

  public function setAfterTable($management = null)
  {
    $date = $this->date;

    // get current date
    $year = date('Y');
    $month = date('m') - 1;
    $daymonth = date('d');
    $dayweek = date('N', strtotime(date('l'))) - 1;

    // build current date in indonesia date string format
    $curr_date = 'Banjarmasin, ' . $daymonth . ' ' . $date['months'][$month] . ' ' . $year;

    $this->Ln(5);
    $this->Cell(0, 10, $curr_date, 0, 1, 'R');

    if ($management !== null) {
      $this->Ln(15);
      $this->Cell(0, 10, $management, 0, 1, 'R');
    }
  }
}
