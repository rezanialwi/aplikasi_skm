<html>
<head>
  <title>Cetak PDF</title>
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo2.ico">
       <link rel="stylesheet" href="<?php echo base_url().'assets3/css/morris.css'?>">

  <!-- Custom fonts for this template -->
   <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">
  

  <!-- Custom styles for this template -->
 <link href="<?php echo base_url('assets/css/cssadmin/sb-admin-2.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>"rel="stylesheet">
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>
</head>
<body onload="script:window.print()">
    <b><?php echo $ket; ?></b><br /><br />
    
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tanggal = date('d-m-Y', strtotime($data->tanggal));
            
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data->id_bagian."</td>";
        echo "<td>".$data->nama_responden."</td>";
        echo "<td>".$data->umur_responden."</td>";
        echo "<td>".$data->jenis_kelamin."</td>";
        echo "<td>".$data->pekerjaan_responden."</td>";
        echo "<td>".$data->pendidikan_responden."</td>";
        echo "<td>".$data->saran."</td>";
        echo "<td>".$data->tingkat_kepuasan."</td>";
        echo "<td>".$data->tanggal."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </table>
   <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/jsadmin/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/jsadmin/demo/datatables-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets2/js/demo/chart-area-demo.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jsadmin/chart-pie-demo.js') ?>"></script>

</body>
</html>