<div class="row notif">
	<div class="col-md-12 col-sm-12">
		<div class="alert alert-success">
			<h3 style="margin:0;">Terimakasih atas partisipasinya :)</h3>
		</div>
	</div>
</div>
<div class="row konten">
	<h2 class="text-center" style="color:white;">PILIH PELAYANAN YANG INGIN ANDA NILAI</h2><hr>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(8);">
				<div class="caption">
					<h4>Pidana/Tipikor</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(9);">
				<div class="caption">
					<h4>Hukum</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(10);">
				<div class="caption">
					<h4>Umum & Keuangan</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(11);">
				<div class="caption">
					<h4>Perdata/PHI</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(12);">
				<div class="caption">
					<h4>Kasir</h4></a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(13);">
				<div class="caption">
					<h4>Bank</h4></a>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function get(c) {
		$.ajax({
			url: '<?php echo base_url(); ?>proses/AddSurveiKategori',
			type: 'post',
			data: {
				get: c
			},
			success: function (Content) {
				location.href = '<?php echo base_url(); ?>web/Content';
			}
		});
	}
</script>