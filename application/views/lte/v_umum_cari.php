<div class="content-wrapper">
<section class="content-header">
<h1>
Umum & Keuangan
<small>Bagian Umum & Keuangan</small>
</h1>
</section>
<section class="content">
<div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Umum & Keuangan</h3><br>
               <a href="<?php echo base_url().'admin/con_umum'; ?>"
class="btn bg-blue"><i class="ace-icon fa fa-mail-reply fa-sm text-white-50"></i>Kembali</a>
               <a href="" class="btn btn-success mb-2 mr-sm-2"><i class="ace-icon fa fa-refresh fa-sm text-white-50"></i> Refresh</a>

                <a href="<?php echo base_url() ?>admin/cetak/cetak_umum" target="_blank" class="btn btn-success mb-2"><i class="ace-icon fa fa-download fa-sm text-white-50"></i> Cetak</a>
             <div class="box-tools">
              <?php echo form_open('admin/con_umum/search') ?>
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Ketik Kata Kunci...">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                  <?php echo form_close() ?>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
          <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="font-weight: bold;">
                  <tr>
                    <td>No</td>
                    <td>Bagian</td>
                    <td>Responden</td>
                    <td>Umur</td>
                    <td>Jenis Kelamin</td>
                    <td>Pekerjaan</td>
                    <td>Pendidikan</td>
                    <td width="250px">Kritik & Saran</td>
                    <td>Kepuasan</td>
                    <td>Tanggal</td>
                  <?php
//cek jika yang login adalah admin
if($this->session->userdata('level') == "admin"){
//tampilkan menu
?>
                    <td>Action</td>
                    	<?php
}
?>
                  </tr>
                </thead>
              </tbody>
              <?php 
              $no=1;
              foreach ($all_umum as $hukum): ?>
                <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $hukum->nama_bagian ?></td>
                      <td><?= $hukum->nama_responden ?></td>
                      <td><?= $hukum->umur_responden ?></td>
                      <td><?= $hukum->jenis_kelamin ?></td>
                      <td><?= $hukum->pekerjaan_responden ?></td>
                      <td><?= $hukum->pendidikan_responden ?></td>
                      <td width="250px"><?= $hukum->saran ?></td>
                      <td><?= $hukum->tingkat_kepuasan ?></td>
                      <td><?= shortdate_indo($hukum->tanggal) ?></td>
                      <td>
<?php
//cek jika yang login adalah admin
if($this->session->userdata('level') == "admin"){
//tampilkan menu
?>
 <a href="<?php echo base_url().'admin/con_umum/edit/'.$hukum->id_responden; ?>" class="btn btn-warning btnsm"> <i class="fa fa-pencil"></i> </a>
<a href="<?php echo base_url().'admin/con_umum/hapus/'.$hukum->id_responden; ?>" class="btn btn-danger btnsm" onclick="return confirm('Yakin ingin Hapus Data ini ?');"> <i class="fa fa-trash"></i> </a>
		  		<?php
}
?>
  		</td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            
    

</div>
</div>
</section>
</div>
