<!DOCTYPE html>
<html>
<head>
	<title>Survei Kepuasan Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>as/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>as/css/style.css">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>as/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>as/js/bootstrap.min.js"></script>
	<style>
		 body{
                background-image: url(<?= base_url('assets/img/pengadilan.jpg') ?>);
                background-repeat: no-repeat;
                background-size: cover;
            }

		 body{
                    background-image: url(<?= base_url('assets/img/pengadilan.jpg') ?>);
                    background-size: cover;
                    height: 720px;
                }
			h1{
                color:white;
                font-family: arial;
            }
			.c1{
                color:black;
                font-family: arial;
            }

			
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="header">
          <img src="<?php echo base_url()  ?>assets/img/logo/logo.png" width="5%">

			<h1>Survei Penilaian Kepuasan Masyarakat</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<center class="c1">
                <a href="<?php echo base_url('admin/overview'); ?>" class="btn btn-info" style="color:#000; font-family: arial;">Home</a>
                  <a href="<?php echo base_url('grafik/result'); ?>" class="btn btn-info" style="color:#000; font-family: arial;">Grafik Keseluruhan</a>
                  <a href="<?php echo base_url('grafik2/result'); ?>" class="btn btn-info" style="color:#000;">Grafik Hari Ini</a>
                  <a href="<?php echo base_url('grafik3/result'); ?>" class="btn btn-info" style="color:#000;">Grafik Perbagian</a>
                  <!-- <a href="<?php echo base_url('grafik_cetak/result'); ?>" class="btn btn-info">Cetak Grafik</a> -->
                  <!-- <a href="<?php echo base_url('cetak_hari/result'); ?>" class="btn btn-info">Cetak Hari ini</a> -->
			</center>
			<br/>
		</div>
	</div>
	
	<!--content is here :)-->
	<?php echo $content; ?>
	
	<hr/>
	<div class="footer" style="background-color:#000; color:#fff; height:25px;">
		<p class="text-center">Survei Kepuasan Masyarakat &copy; 2020 Pengadilan Negeri Banjarmasin</p><br/>
	</div>
</div>
</body>
</html>