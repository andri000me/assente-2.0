<h3 class="page-header">Tambah Mahasiswa ke Kelas </h3>
<form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./model/proses.php">
<?php 
	if (isset($_GET['st'])) {
		if ($_GET['st']==1) {
			echo "<div class='alert alert-warning'><strong>Berhasil Ditambahkan.</strong></div>";
		} elseif ($_GET['st']==2) {
			echo "<div class='alert alert-danger'><strong>Gagal Menambahkan.</strong></div>";
		} elseif ($_GET['st']==3) {
			echo "<div class='alert alert-danger'><strong>Maaf Anda  Sudah Masuk kelas ini</strong></div>";
		} elseif ($_GET['st']==4) {
      echo "<div class='alert alert-danger'><strong>Semua kolom wajib di isi.</strong></div>";
    } elseif ($_GET['st']==5) {
      echo "<div class='alert alert-danger'><strong>Katasandi tidak cocok!</strong></div>";
    } elseif ($_GET['st']==6) {
      echo "<div class='alert alert-danger'><strong>NIS sudah terdaftar!</strong></div>";
    }
	}

 ?>
<?php

$sql = "SELECT * FROM detail_user";
$mk = $conn->query($sql);
echo "<div class='form-group'>
    <div class='input-group-prepend'>
      <label class='control-label col-sm-2' for='inputGroupSelect01'>Nama Mahasiswa:</label>
    </div>
    <select class='col-sm-10' name='nama1' id='inputGroupSelect01'>";
while($view_mk=$mk->fetch_assoc()){
    
    echo "
      <option value='$view_mk[id_user]'>$view_mk[name_user]</option>";

}
echo"</select>
</div>";
?>


<?php

$sql2 = "SELECT * FROM kelas";
$mk2 = $conn->query($sql2);
echo "<div class='form-group'>
    <div class='input-group-prepend'>
      <label class='control-label col-sm-2' for='inputGroupSelect01'>Kelas:</label>
    </div>
    <select class='col-sm-10' name='mk1' id='inputGroupSelect01'>";
while($view_mk2=$mk2->fetch_assoc()){
    
    echo "
      <option value='$view_mk2[id_kelas]'>$view_mk2[nama_kls]</option>";

}
echo"</select>
</div>";
?>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="add_mhs_kls">Tambah</button>
    </div>
  </div>
</form>
