<!DOCTYPE html>
<html>
<head>
	<title>Survei Kepuasan Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(<?= base_url('assets/img/sampul.jpg'); ?>);background-size:cover;">>
<div class="container">
	<div class="row">
		<div class="header">
			<h1>Survei Kepuasan Pelanggan</h1>
			<h1>Pengadilan Negeri Banjarmasin</h1>
		</div>
	</div>
	<br/>
	

<div class="row notif">
	<div class="col-md-12 col-sm-12">
		<div class="alert alert-success">
			<h3 style="margin:0;">Terimakasih atas partisipasinya :)</h3>
		</div>
	</div>
</div>
<div class="row konten">
	<h2 class="text-center" style="color:white;">PILIH UMUR ANDA ANDA?</h2><hr>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(3);">
				<div class="caption">
					<h4>≤19 tahun</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(4);">
				<div class="caption">
					<h4>20-35 tahun</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(5);">
				<div class="caption">
					<h4>36-45 tahun</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(6);">
				<div class="caption">
					<h4>46-55 tahun</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(7);">
				<div class="caption">
					<h4>≥56 tahun</h4></a>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function get(c) {
		$.ajax({
			url: '<?php echo base_url(); ?>proses/AddSurveiUmur',
			type: 'post',
			data: {
				get: c
			},
			success: function () {
				$(".notif").show();
				$(".notif").fadeOut(1000);
			}
		});
	}
</script>
