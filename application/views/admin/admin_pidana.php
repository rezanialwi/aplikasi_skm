<!------------------------------------------------
|
|            Ini diambil dari index SB 2 admin
|
|-----------------------------------------------------         
|
|  Fungsi base_url() digunakan untuk membangun url untuk mengakses 
|         resource yang barada di direktori root web.
|  Sedangkan fungsi site_url() digunakan untuk mengakses Controller tertentu.
|
|--------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Survei Kepuasan - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/cssadmin/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav navbar-light sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #204051">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand" href="<?php echo base_url();  ?>admin/overview">
          <img src="../assets/img/logo/logo.png" style="width: 150px; height: 110px;">Survei Kepuasan
        
      </a>
      <br><br><br><br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();  ?>admin/overview">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Heading -->
      <div class="sidebar-heading">
        <i class="fas fa-fw fa-table"></i>
        Tabel Kepuasan
      </div>

      <!-- Nav Item - Table Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/con_pidana">
          <span>Pidana/Tipikor</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Hukum</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Umum & Keuangan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Perdata/PHI</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Kasir</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Bank</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        <i class="fas fa-fw fa-table"></i>
        Admin 
      </div>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<br/><br/>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<?php
/*
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?php echo base_url(); ?>admin/con_pidana" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-10 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pesurvei</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


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
          </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      */
          ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<div id="content-wrapper" class="d-flex flex-column">
	<div id="content" data-url="<?= base_url('admin/con_pidana') ?>">
		<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800">Tabel Pidana</h1>
					</div>
				</div>
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Pidana</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No</td>
										<td>Kode Bagian</td>
										<td>Nama</td>
										<td>Umur</td>
										<td>Jenis Kelamin</td>
										<td>Pekerjaan</td>
										<td>Pendidikan</td>
										<td>Tingkat Kepuasan</td>
										<td>Waktu Input</td>
									</tr>
								</thead>
							</tbody>
							<?php foreach ($all_pidana as $pidana): ?>
								<tr>
											<td><?= $no++ ?></td>
											<td><?= $pidana->id_bagian ?></td>
											<td><?= $pidana->nama_responden ?></td>
											<td><?= $pidana->umur_responden ?></td>
											<td><?= $pidana->jenis_kelamin ?></td>
											<td><?= $pidana->pekerjaan_responden ?></td>
											<td><?= $pidana->pendidikan_responden ?></td>
											<td><?= $pidana->tingkat_kepuasan ?></td>
											<td><?= $pidana->waktu_input ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
/*
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
*/?>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/jsadmin/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
 <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Sangat Puas", "Cukup Puas", "Kurang Puas"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

  </script>
  <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = $("#myAreaChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Pengunjung",
      data: [90, 20, 15, 13, 14, 15, 14, 13, 12, 12, 12, 19],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

  </script> 

</body>

</html>
