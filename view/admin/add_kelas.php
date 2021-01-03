<h3 class="page-header">Tambah Kelas Baru</h3>
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
    <label class="control-label col-sm-2" for="name">Kode Kelas:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Kelas" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sekolah">Nama Kelas:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kelas" required>
    </div>
  </div>

  <?php
$sql2 = "SELECT * FROM matkul";
$mk2 = $conn->query($sql2);
echo "<div class='form-group'>
    <div class='input-group-prepend'>
      <label class='control-label col-sm-2' for='inputGroupSelect01'>Mata Kuliah:</label>
    </div>
    <select class='col-sm-10' name='mk' id='inputGroupSelect01'>";
while($view_mk2=$mk2->fetch_assoc()){
    
    echo "
      <option value='$view_mk2[id_mk]'>$view_mk2[nama_mk]</option>";

}
echo"</select>
</div>";
?>


<?php
$sql1 = "SELECT * FROM detail_pb";
$mk = $conn->query($sql1);
echo "<div class='form-group'>
    <div class='input-group-prepend'>
      <label class='control-label col-sm-2' for='inputGroupSelect02'>Dosen:</label>
    </div>
    <select class='col-sm-10' name='dosen1' id='inputGroupSelect02'>";
while($view_mk=$mk->fetch_assoc()){

    echo "
      <option value='$view_mk[id_user]'>$view_mk[name_user]</option>";
 
}
echo"</select>
</div>";


?>




<div class="form-group">
    <label class="control-label col-sm-2" for="sekolah">Ruangan:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ruang" placeholder="Masukan Ruangan" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="hari">Hari:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hari" placeholder="Masukan Hari" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="waktu">waktu:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="waktu" placeholder="waktu" required>
    </div>
  </div>
 
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="add_kelas">Simpan</button>
      <button type="reset" class="btn btn-warning" name="add_kelas">Reset</button>
    </div>
  </div>
</form>
