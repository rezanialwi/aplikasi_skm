<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
		.table.table-bordered{
			border:1px solid black;
		}

		.table.table-bordered > thead > tr > th {
			border:1px solid black;
		}
		.table.table-bordered > tbody > tr > td{
			border:1px solid black;
		}
	</style>
</head>
<body onload="script:window.print()">
	<table style="width: 100%;">
		<tr>
				<img src="<?php echo base_url().'assets/img/logo/logo.png'?>" style="position: absolute; width: 120px; height: auto;">
				<td align="center">
			
				<span style="line-height: 1.6; font-weight: bold; font-size: 20px; align-content: center;">&nbsp;
				PENGADILAN NEGERI BANJARMASIN KELAS I A
				</span>
				<br>
				<span style="line-height: 1.6; font-weight: normal; font-size: 18px">
					Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Provinsi Kalimantan Selatan 70114
 					<br>Telp Fax. 0511-3352859 & 3353263
 					<br><u>E-MAIL: pn_bjm@yahoo.com</u>
					 <br><u>Website : www.pn-banjarmasin.go.id</u>
				</span>
			<br><br>
			</td>
		</tr>
	</table>

	<hr class="line-title">
	<p align="center" style="font-size: 18px;">
		Laporan Data Responden 
	</p>

	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Bagian</th>
										<th>Responden</th>
										<th>Umur</th>
										<th>Jenis Kelamin</th>
										<th>Pekerjaan</th>
										<th>Pendidikan</th>
										<th>Kritik & Saran</th>
										<th>Kepuasan</th>
										<th>Tanggal</th>
										
									</tr>
								</thead>
							</tbody>
						
							<?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tanggal = date('d-m-Y', strtotime($data->tanggal));
            
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data->nama_bagian."</td>";
        echo "<td>".$data->nama_responden."</td>";
        echo "<td>".$data->umur_responden."</td>";
        echo "<td>".$data->jenis_kelamin."</td>";
        echo "<td>".$data->pekerjaan_responden."</td>";
        echo "<td>".$data->pendidikan_responden."</td>";
        echo "<td>".$data->saran."</td>";
        echo "<td>".$data->tingkat_kepuasan."</td>";
        echo "<td>".shortdate_indo($data->tanggal)."</td>";
        echo "</tr>";
        
      }
    }
    ?>
								</tbody>
							</table>

						

						<p style="font-weight: bold; text-align: right;">
							Banjarmasin, <?php echo tanggal(); ?>
						</p>
						<br><br><br><br><br>
						<p style="font-weight: bold; text-align: right;">
							Sekretaris Pengadilan Negeri Banjarmasin
						</p>

</body>
</html>