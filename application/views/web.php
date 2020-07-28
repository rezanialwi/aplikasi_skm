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
<body style="background-image:url(<?= base_url('assets/img/pengadilan.jpg'); ?>); background-size:cover;">
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
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a data-toggle="modal" data-target="#modalPidana" href="#" class="viewContact" ><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Pidana/Tipikor</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalHukum" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Hukum</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalUmum" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Umum & Keuangan</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalPerdata" href="#" class="viewContact"><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Perdata/PHI</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalKasir" href="#" class="viewContact" ><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Kasir</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail" >
				<a  data-toggle="modal" data-target="#modalBank" href="#" class="viewContact" ><img
						src="<?php echo base_url() ?>assets/img/logo/logo2.jpeg" width="70" alt="Perempuan"></a>
				<div class="caption">
					<h4>Bank</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalPidana" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog" style="width: 75%">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br/>
								&nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; 
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br/>		
								&nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; 
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br/>
								Sangat puas
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
            <div class="modal-dialog">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png">
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png">								
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png">
								Sangat puas
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
            <div class="modal-dialog">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png">
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png">								
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png">
								Sangat puas
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
            <div class="modal-dialog">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png">
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png">								
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png">
								Sangat puas
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
            <div class="modal-dialog">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png">
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png">								
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png">
								Sangat puas
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
            <div class="modal-dialog">
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
                             <input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Tidak puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/tidak_puas.png">
								Tidak puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Cukup puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/cukup_puas.png">								
								Cukup puas
							</br>
							<input name="tingkat_kepuasan" type="radio" class="custom-control-input" value="Sangat puas" name="groupOfRadios">
								<img src="<?php echo base_url() ?>assets/img/sangat_puas.png">
								Sangat puas
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

<!--
<div id="modalResponden" class="modal fade" role="dialog">
      <div class="modal-dialog" style="width:50%;">
	  //modal-lg
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Silahkan isi data diri anda untuk memulai survei : 
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			  </h5>
            </div>
            <div class="modal-body">
              <p id="showid"></p>
              <form action="<?=base_url()?>prosesmodel/add" method="post">
                <input type="hidden" name="nama_responden" id="nama_responden" class="form-control" >
                <table class="table table-striped">
                  <tr>
                    <td>Nama<br></td>
                    <td>
                      <div class="col-sm-8">
                        <input size="50" type="text" name="NAMA" class="form-control" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Umur<br></td>
                    <td>
                      <div class="col-sm-4">
                        <input type="number" name="UMUR" class="form-control" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin<br></td>
                    <td>
                      <div class="col-sm-8">
                        <select name="JENIS_KELAMIN" class="form-control" required>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div> 
                    </td>
                  </tr>
                  <tr>
					<td>Pekerjaan<br></td>
                    <td>
                      <div class="col-sm-8">
                        <input size="50" type="text" name="PEKERJAAN" class="form-control" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
				  <td>Pendidikan terakhir<br></td>
                    <td>
                      <div class="col-sm-8">
                        <select name="PENDIDIKAN" class="form-control" required>
                          <option value="SD/SEDERAJAT">SD/Sederajat</option>
                          <option value="SMP/SEDERAJAT">SMP/Sederajat</option>
						  <option value="SMA/SEDERAJAT">SMA/Sederajat</option>
						  <option value="S0">S0</option>
						  <option value="S1">S1</option>
						  <option value="S2">S2</option>
						  <option value="S3">S3</option>
                        </select>
                      </div>
                    </td>
                  </tr>
				  <tr>
                   <td>tingkat kepuasan<br></td>
						<td>
						  	<div class="custom-control custom-radio">
							<label class="custom-control-label" for="Tidak puas">
								<input type="radio" class="custom-control-input" id="Tidak puas" name="groupOfRadios">
								<img src="assets/img/tidak_puas.png"><br/>
								&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
								Tidak puas
							</label>
							
							<label class="custom-control-label" for="Cukup puas">
								<input type="radio" class="custom-control-input" id="Cukup puas" name="groupOfRadios">
								<img src="assets/img/cukup_puas.png"><br/>
								&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
								Cukup puas
							</label>
							
							<label class="custom-control-label" for="Sangat puas">
								<input type="radio" class="custom-control-input" id="Sangat puas" name="groupOfRadios">
								<img src="assets/img/sangat_puas.png"><br/>
								&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
								Sangat puas
							</label>
							</div>
						</td>
                  </tr> 
                  <tr>
                    <td colspan="2">
                      <input type="submit" class="btn btn-success" value="Simpan">
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>
-->


	
</div>
</body>
</html>