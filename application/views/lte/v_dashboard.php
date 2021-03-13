
  <div class="content-wrapper">
<section class="content-header">
<h1>
Dashboard
<small>Control panel</small>
</h1>
</section>
  <section class="content">
 
 
	<div class="container-fluid">	
		<div class="jumbotron pt-2">
			<h1 class="display-5 text-dark-primary">Selamat Datang</h1>
  				<p class="lead text-dark-primary">Pada Survei Kepuasan Masyarakat Harian Pengadilan Negeri Banjarmasin Kelas I A</p>
  				<hr class="my-3">



          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            

			<div class="carousel">
		        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img class="d-block w-100" src="<?php echo base_url() ?>assets/img/cover1.png" alt="First slide">
    					</div>
  					</div>

  					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
 					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>  
  				</div>
			</div>
		</div>
	</div>
	 <section class="content">

 <div class="col-lg-6 col-xs-6">
	<div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $responden['hasil']; ?></h3>

                  <p>PIDANA</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bank"></i>
                </div>
                <a href="<?php echo site_url('admin/con_pidana') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $responden2['hasil']; ?></h3>

                  <p>HUKUM</p>
                </div>
                <div class="icon">
                  <i class="fa fa-balance-scale"></i>
                </div>
                <a href="<?php echo site_url('admin/con_hukum') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			</div>
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $responden3['hasil']; ?></h3>

                  <p>UMUM & KEUANGAN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="<?php echo site_url('admin/con_umum') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			</div>
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $responden4['hasil']; ?></h3>

                  <p>PERDATA</p>
                </div>
                <div class="icon">
                  <i class="fa fa-legal"></i>
                </div>
                <a href="<?php echo site_url('admin/con_perdata') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			</div>
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <h3><?php echo $responden5['hasil']; ?></h3>

                  <p>TIPIKOR</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo site_url('admin/con_tipikor') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			</div>
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3><?php echo $responden6['hasil']; ?></h3>

                  <p>PHI</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo site_url('admin/con_phi') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			</div>
	
	<!-- Pie Chart -->
  <!-- Pie Chart -->
<div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Keseluruhan Survei</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <a href="<?php echo base_url('grafik/result'); ?>" class="btn btn-primary btn-block">Lihat Grafik</a><br>
				<br>
                <a href="<?php echo base_url('cetak_hari'); ?>" class="btn btn-warning btn-block">Cetak Laporan</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
                <!-- Card Body -->
               
            

              

            <!-- ./col -->

</div>
</div>
</div>
</section>
</div>