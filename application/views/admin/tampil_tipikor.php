<?php
//require "database_connection/database_connection.php";
//$data=$connect->query("SELECT * FROM responden");

//$filter = '';
//$sql = "SELECT * FROM view_tipikor ";

// if(isset($_POST['filter'])) {
//   // echo $_POST['tanggal_awal'];
//   $tgl_awal = $_POST['tanggal_awal'];
//   $tgl_akhir = $_POST['tanggal_akhir'];

//   $filter = '?awal=' . $tgl_awal . '&akhir=' . $tgl_akhir;

//   $sql = "SELECT * FROM detail_pengadaan WHERE tanggal_pengadaan BETWEEN '$tgl_awal' AND '$tgl_akhir'";
// }

//$data=$connect->query($sql);


 ?>

<?php $this->load->view('template/header.php')  ?>     
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Responden</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data
                  </button> -->
                </div>

                <form method="post" class="form-inline col-8 justify-content-end">
                
                <a href="" class="btn btn-success mb-2 mr-sm-2">Refresh</a>

                <a href="<?php echo base_url() ?>admin/cetak/cetak_tipikor" target="_blank" class="btn btn-success mb-2">Cetak</a>
              </form>
              </div>
              <hr>
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
                    <td>Kepuasan</td>
                    <td>Waktu</td>
                  </tr>
                </thead>
              </tbody>
              <?php foreach ($all_tipikor as $tipikor): ?>
                <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $tipikor->nama_bagian ?></td>
                      <td><?= $tipikor->nama_responden ?></td>
                      <td><?= $tipikor->umur_responden ?></td>
                      <td><?= $tipikor->jenis_kelamin ?></td>
                      <td><?= $tipikor->pekerjaan_responden ?></td>
                      <td><?= $tipikor->pendidikan_responden ?></td>
                      <td><?= $tipikor->tingkat_kepuasan ?></td>
                      <td><?= $tipikor->waktu_input ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view('template/footer.php')  ?>  