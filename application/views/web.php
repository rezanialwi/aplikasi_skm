<!DOCTYPE html>
<html>
<head>
	<title>Survei Kepuasan Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.9), rgba(255,255,255,0.08)),url(<?= base_url('assets/img/pengadilan.jpg'); ?>); background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row">
		<div class="header" style="color:#fff">
			<h1 style="font-family:Oswald; font-size:3.3em">Survei Kepuasan Pelanggan</h1>
			<h1 style="font-family:Helvetica; font-size:1.8em">Pengadilan Negeri Banjarmasin</h1>
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
<div class="row konten" style="padding-top:3.5em; height:26.9em;">
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a data-toggle="modal" data-target="#modalPidana" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Pidana/Tipikor</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalHukum" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Hukum</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalUmum" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Umum & Keuangan</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalPerdata" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Perdata/PHI</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalKasir" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Kasir</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalBank" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/courtlogo.png" width="70" alt=""></a>
				<div class="caption">
					<h4 style="font-family:Roboto;">Bank</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalPidana" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="1"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                        	<select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
</div>
</div>

<div class="modal fade" id="modalHukum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="2"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                           <select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

<div class="modal fade" id="modalUmum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="3"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                            <select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

<div class="modal fade" id="modalPerdata" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="4"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                            <select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <div class="modal fade" id="modalKasir" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="5"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                            <select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <div class="modal fade" id="modalBank" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/prosesmodal/simpan_responden'?>">
                <div class="modal-body">

                	<div class="form-group">
                        <label class="control-label col-xs-3" >Bagian</label>
                        <div class="col-xs-8">
                            <input name="id_bagian" class="form-control" type="text" placeholder="" value="6"  required readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama_responden" class="form-control" type="text" placeholder="Nama anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Umur</label>
                        <div class="col-xs-8">
                            <input name="umur_responden" class="form-control" type="number" placeholder="Umur anda..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8">
                             <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pekerjaan</label>
                        <div class="col-xs-8">
                            <select name="pekerjaan_responden" class="form-control" required>
                        		<option value="">-PILIH-</option>
                        	<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Pegawai/Swasta">Pegawai/Swasta</option>
						  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						  <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
						  <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pendidikan Terakhir</label>
                        <div class="col-xs-8">
                             <select name="pendidikan_responden" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat Kepuasan</label>
                        <div class="col-xs-8">
						<label class="radio-inline">
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Tidak puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;
								<b>Cukup puas</b>
						</label>
						<label class="radio-inline">	
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios" required>
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;
								<b>Sangat puas</b>
						</label>		
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD BARANG-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
	function get(c) {
		$.ajax({
			url: '<?php echo base_url(); ?>proses/AddSurveiGender',
			type: 'post',
			data: {
				get: c
			}		
		});
	}
</script>
<script type="text/javascript">
	var tombol = document.getElementById("tombol");

	tombol.onclick = function(){
		location.href = "umur";
	}
</script>
	<hr/>	
</div>
<footer class="page-footer font-small pt-4" style="background-color:#000; color:#fff; height:25px;">
		<div class="footer-copyright text-center py-3">© 2020 Copyright: Pengadilan Negeri Banjarmasin</div>
</footer>
</body>
</html>