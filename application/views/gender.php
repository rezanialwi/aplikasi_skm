<div class="row notif">
	<div class="col-md-12 col-sm-12">
		<div class="alert alert-success">
			<h3 style="margin:0;">Terimakasih atas partisipasinya :)</h3>
		</div>
	</div>
</div>
<div class="row konten">
	<h2 class="text-center" style="color:white;">PILIH GENDER ANDA?</h2><hr>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(1);"><img
						src="<?php echo base_url() ?>assets/img/laki_laki.png" width="150" alt="Laki-laki"></a>
				<div class="caption">
					<h4>Laki-laki</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(2);"><img
						src="<?php echo base_url() ?>assets/img/perempuan.png" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Perempuan</h4>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function get(c) {
		$.ajax({
			url: '<?php echo base_url(); ?>proses/AddSurveiGender',
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