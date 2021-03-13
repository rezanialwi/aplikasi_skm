<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 

    <title>SKMH</title>
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo3.ico">
       <link rel="stylesheet" href="<?php echo base_url().'assets3/css/morris.css'?>">

  <!-- Custom fonts for this template -->
   <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">
  

  <!-- Custom styles for this template -->
 <link href="<?php echo base_url('assets/css/cssadmin/sb-admin-2.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>"rel="stylesheet">

</head>

  <body id="page-top">
    <div id="wrapper">
    <!-- Sidebar -->
      <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url()  ?>assets/img/logo/logo.png" width="60%">
        </div>
        <div class="sidebar-brand-text mx-3" >SURVEI</sup></div>
      </a>
<!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="overview">
          <i class="fas fa-fw fa-home"></i>
          <span>Profile</span></a>
      </li>

     <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_pidana">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pidana</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_hukum">
          <i class="fas fa-fw fa-folder"></i>
          <span>Hukum</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_umum">
          <i class="fas fa-fw fa-folder"></i>
          <span>Umum dan Keuangan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_perdata">
          <i class="fas fa-fw fa-folder"></i>
          <span>Perdata</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_tipikor">
          <i class="fas fa-fw fa-folder"></i>
          <span>Tipikor</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/con_phi">
          <i class="fas fa-fw fa-folder"></i>
          <span>PHI</span></a>
      </li>

      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout'); ?>" onclick="return confirm('Yakin Ingin Keluar ? ');">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <hr class="sidebar-divider">


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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-white bg-white topbar mb-4 static-top shadow ">
          <h3 >Survei Kepuasan Masyarakat Harian</h3>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <!-- /.container-fluid -->


<?php  ?>