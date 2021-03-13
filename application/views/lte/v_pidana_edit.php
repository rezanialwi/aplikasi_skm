<div class="content-wrapper">
<section class="content-header">
<h1>
Pidana
<small>Bagian Pidana</small>
</h1>
</section>
<section class="content">
<div class="row">
<div class="col-lg-6">
<a href="<?php echo base_url().'admin/con_pidana'; ?>" class="btn btnsm
btn-primary">Kembali</a>
<br/>
<br/>
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Edit Pidana</h3>
</div>
<div class="box-body">
		<?php foreach($responden as $u){ ?>
				 <form action="<?php echo base_url(). 'admin/con_pidana/update'; ?>" method="post">
				  <div class="form-group">
                  <input type="hidden" class="form-control form-control" name="id_responden"  value="<?php echo $u->id_responden ?>">
                </div>
				  <div class="form-group">
                  <input type="hidden" class="form-control form-control" name="id_bagian"  value="<?php echo $u->id_bagian ?>">
                </div>
               <div class="form-group">
                    <label for="nama"> Nama Lengkap : </label>
                  <input type="text" class="form-control form-control" name="nama_responden"value="<?php echo $u->nama_responden ?>">
                </div>
                <div class="form-group">
                     <label for="nama"> Umur : </label>
                  <input type="number" class="form-control form-control" name="umur_responden"  value="<?php echo $u->umur_responden ?>">
                </div>
                <div class="form-group">
               <label for="nama"> Jenis Kelamin: </label>
								  <div class="col-sm-15">
                       <?php
                          echo form_dropdown('jenis_kelamin', array('Pilih Gender', 'Laki-laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'), $u->jenis_kelamin, "class='form-control'");
                        ?>
                      </div>
                      <div class="form-group">
                <label for="nama"> Pekerjaan: </label>
								  <div class="col-sm-15">
                       <?php
                          echo form_dropdown('pekerjaan_responden', array('Pilih Pekerjaan', 'PNS/TNI/POLRI'=>'PNS/TNI/POLRI', 'Pegawai/Swasta'=>'Pegawai/Swasta'
                        , 'Pegawai/Swasta'=>'Pegawai/Swasta', 'Pelajar/Mahasiswa'=>'Pelajar/Mahasiswa', 'Wiraswasta/Usahawan'=>'Wiraswasta/Usahawan'
                    , 'Lain-lain'=>'Lain-lain'), $u->pekerjaan_responden, "class='form-control'");
                        ?>
                      </div>
                      <div class="form-group">
                <label for="nama"> Pendidikan: </label>
								  <div class="col-sm-15">
                       <?php
                          echo form_dropdown('pendidikan_responden', array('Pilih Pendidikan', 'SD/Sederajat'=>'SD/Sederajat', 'SMP/Sederajat'=>'SMP/Sederajat'
                        , 'SMA/Sederajat'=>'SMA/Sederajat', 'D3'=>'D3', 'S1'=>'S1'
                    , 'S2'=>'S2', 'S3'=>'S3'), $u->pendidikan_responden, "class='form-control'");
                        ?>
                      </div>
                   <div class="form-group">
                    <label for="nama"> Kritik & Saran: </label>
                  <input type="text" class="form-control form-control" name="saran"value="<?php echo $u->saran ?>">
                </div>
                 <div class="form-group">
                  
                  <input type="hidden" class="form-control form-control" name="tanggal"value="<?php echo $u->tanggal ?>">
                </div>
                <div class="form-group">
                 <label for="nama"> Tingkat Kepuasan: </label>
								  <div class="col-sm-15">
                       <?php
                          echo form_dropdown('tingkat_kepuasan', array('Pilih Tingkat Kepuasan', 'Tidak puas'=>'Tidak puas', 'Cukup puas'=>'Cukup puas', 'Sangat puas'=>'Sangat puas'), $u->tingkat_kepuasan, "class='form-control'");
                        ?>
                      </div>
            
				<input type="submit" class="btn btn-primary btn btn-block" value="Simpan">
			</form>
            	<?php } ?>
</div>
</div>
</div>
</div>
</section>
</div>