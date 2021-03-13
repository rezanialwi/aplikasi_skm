<!DOCTYPE html>
<html>
<head>
	<title>Survei Kepuasan Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>as/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>as/css/style.css">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>as/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>as/js/bootstrap.min.js"></script>
</head>
<body onload="script:window.print()">
<div class="container">
	<div class="row">
		<div class="header">
          <img src="<?php echo base_url()  ?>assets/img/logo/logo.png" width="5%">

			<h1>Survei Penilaian Kepuasan Masyarakat</h1>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-12 col-sm-12">
			<center>
                <a href="<?php echo base_url('admin/overview'); ?>" class="btn btn-info">Home</a>
                  <a href="<?php echo base_url('grafik/result'); ?>" class="btn btn-info">Grafik Keseluruhan</a>
                  <a href="<?php echo base_url('grafik2/result'); ?>" class="btn btn-info">Grafik Hari Ini</a>
                  <a href="<?php echo base_url('grafik3/result'); ?>" class="btn btn-info">Grafik Perbagian</a>
                  <!-- <a href="<?php echo base_url('cetak_hari/result'); ?>" class="btn btn-info">Cetak Hari ini</a> -->
			</center>
			<br/>
		</div>
	</div> -->
	
    <center>
	<!--content is here :)-->
	<?php echo $content; ?>
    </center>
	
	<hr/>
	<div class="footer">
		<p>Survei Kepuasan Masyarakat &copy; 2020 Pengadilan Negeri Banjarmasin</p><br/>
	</div>
</div>
</body>
</html>