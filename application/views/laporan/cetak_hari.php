
<div class="content-wrapper">
<section class="content-header">
<h1>
Laporan
<small>Cetak Laporan </small>
</h1>
</section>
<section class="content">

    <h2 class="text-center">Data Laporan Survei</h2><hr>
    <div class="row">
<div class="col-lg-6">
    <form method="get" action="">
    <div class="form-group">
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter" class="form-control form-control-user">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        </div>
        <br /><br />
        
        <div id="form-tanggal" class="form-group">
            <label>Tanggal</label><br>
            <input type="date" name="tanggal" class="input-tanggal form-control">
            <br /><br />
        </div>
        
        <div id="form-bulan" class="form-group">
            <label>Bulan</label><br>
            <select name="bulan" class="form-control form-control-user">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>
        <div id="form-tahun" class="form-group">
            <label>Tahun</label><br>
            <select name="tahun" class="form-control form-control-user">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>
        <button type="submit" class="btn btn-success">Tampilkan</button>
        <a href="<?php echo base_url('cetak_hari'); ?>" class="btn btn-danger">Reset Filter</a>
        <a href="<?php echo base_url('admin/overview'); ?>" class="btn btn-primary">Kembali</a>
    </form>
    <hr />
    
    <b><?php echo $ket; ?></b><br /><br />
    <a href="<?php echo $url_cetak; ?>" class="btn btn-info">CETAK PDF</a><br /><br />
    </div>
</div>
    <div class="row">
        <div class="col-xs-12">
      <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="font-weight: bold;">
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
    </thead>
              <tbody>
    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tanggal = date('d-m-Y', strtotime($data->tanggal));
            
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data->nama_bagian."</td>";
        echo "<td>".$data->nama_responden."</td>";
        echo "<td>".$data->umur_responden."</td>";
        echo "<td>".$data->jenis_kelamin."</td>";
        echo "<td>".$data->pekerjaan_responden."</td>";
        echo "<td>".$data->pendidikan_responden."</td>";
        echo "<td>".$data->saran."</td>";
        echo "<td>".$data->tingkat_kepuasan."</td>";
        echo "<td>".shortdate_indo($data->tanggal)."</td>";
        echo "</tr>";
        
      }
    }
    ?>
      </tbody>
    <script src="<?php echo base_url('as/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
</table>
</div>
</div>
</div>
</div>

 


