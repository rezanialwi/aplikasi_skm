<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Survei Kepuasan Masyarakat | Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets3/dist/img/logo3.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="<?php echo base_url('as/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
    <script src="<?php echo base_url('as/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
<a href="<?php echo base_url().'admin/overview' ?>" class="logo">
<span class="logo-mini"><b>AS</b></span>
<span class="logo-lg"><b>Aplikasi</b> SKM</span>
</a>
<nav class="navbar navbar-static-top">
<a href="#" class="sidebar-toggle" data-toggle="push-menu"
role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">

 <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets3/dist/img/logo.png"class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $this->session->userdata('username') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets3/dist/img/logo.png" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username') ?>
                 <small>Pengadilan Negeri Banjarmasin</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?php echo base_url().'login/keluar' ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>
<aside class="main-sidebar">
<section class="sidebar">
<div class="user-panel">
<div class="pull-left image">
<img src="<?php echo base_url(); ?>assets3/dist/img/logo.png" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<?php
$id_user = $this->session->userdata('id');
$user = $this->db->query("select * from pengguna
where pengguna_id='$id_user'")->row();
?>
<p><?php echo $user->pengguna_nama; ?></p>
<a href="#"><i class="fa fa-circle text-success"></i>
Online</a>
</div>
</div>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
<li>
<a href="<?php echo base_url().'admin/overview' ?>">
<i class="fa fa-dashboard"></i>
<span>DASHBOARD</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_pidana'
?>">
<i class="fa fa-bank "></i>
<span>PIDANA</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_hukum'
?>">
<i class="fa fa-balance-scale"></i>
<span>HUKUM</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_umum'
?>">
<i class="fa fa-money"></i>
<span>UMUM & KEUANGAN</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_perdata'
?>">
<i class="fa fa-legal"></i>
<span>PERDATA</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_tipikor'
?>">
<i class="fa fa-users"></i>
<span>TIPIKOR</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/con_phi'
?>">
<i class="fa fa-archive"></i>
<span>PHI</span>
</a>
</li>

<!-- <li>
<a href="<?php echo base_url().'dashboard/artikel' ?>">
<i class="fa fa-pencil"></i>
<span>Petugas</span>
</a>
</li> -->
 <li class="header">OPTION NAVIGATION</li>
 <?php
//cek jika yang login adalah admin
if($this->session->userdata('level') == "admin"){
//tampilkan menu
?>
 <li>
<a href="<?php echo base_url().'admin/overview/pengguna'
?>">
<i class="fa fa-user-md"></i>
<span>PENGGUNA & HAK AKSES</span>
</a>
</li>
	  		<?php
}
?>
 <li>
<a href="<?php echo base_url().'admin/overview/profil' ?>">
<i class="fa fa-user"></i>
<span>PROFIL</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'admin/overview/ganti_password' ?>">
<i class="fa fa-lock"></i>
<span>GANTI PASSWORD</span>
</a>
</li>
<!-- <li>
<a href="<?php echo base_url().'login/keluar' ?>" onclick="return confirm('Yakin ingin Keluar ?');">
<i class="fa fa-share"></i>
<span>KELUAR</span>
</a>
</li> -->
</ul>
</section>
</aside>