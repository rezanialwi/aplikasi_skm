<?php $this->load->view('template/header.php')  ?>        


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

	<!-- Pie Chart -->
	<!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rata-rata Keseluruhan Survei</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
               <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Sangat Puas
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Cukup Puas
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Kurang Puas
                    </span>
                  </div>
                </div>
              </div>
            </div>
			


<?php $this->load->view('template/footer.php')  ?>  