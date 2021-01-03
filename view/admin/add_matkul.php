<h3 class="page-header">Tambah Mata Kuliah Baru</h3>
<?php 
	if (isset($_GET['st'])) {
		if ($_GET['st']==1) {
			echo "<div class='alert alert-warning'><strong>Berhasil Ditambahkan.</strong></div>";
		} elseif ($_GET['st']==2) {
			echo "<div class='alert alert-danger'><strong>Gagal Menambahkan.</strong></div>";
		} elseif ($_GET['st']==3) {
			echo "<div class='alert alert-danger'><strong>Maaf Kode Matkul Sudah Ada</strong></div>";
		} elseif ($_GET['st']==4) {
      echo "<div class='alert alert-danger'><strong>Semua kolom wajib di isi.</strong></div>";
    } elseif ($_GET['st']==5) {
      echo "<div class='alert alert-danger'><strong>Katasandi tidak cocok!</strong></div>";
    } elseif ($_GET['st']==6) {
      echo "<div class='alert alert-danger'><strong>NIS sudah terdaftar!</strong></div>";
    }
	}

 ?>
<form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./model/proses.php">

  
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Kode Mata Kuliah:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Mata Kuliah" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sekolah">Nama Mata Kuliah:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mata Kuliah" required>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="add_matkul">Simpan</button>
      <button type="reset" class="btn btn-warning" name="add_matkul">Reset</button>
    </div>
  </div>
</form>
