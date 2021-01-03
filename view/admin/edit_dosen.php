<?php 

    $id_siswa = mysqli_real_escape_string($conn, $_GET['id_dsn']);
    $sql_sw = "SELECT*FROM detail_pb NATURAL LEFT JOIN user WHERE id_user= '$id_siswa'";
    if ($get_sw = $conn->query($sql_sw)->fetch_assoc()) {
    extract($get_sw);
    ?>
    <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./model/proses.php">
  <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Nama Lengkap:</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo $name_user; ?>" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
    <div class="col-sm-10">
        <?php 
        $jk = array("Laki-laki","Perempuan");
        $jk_vl = array("L","P");
        $sum = count($jk_vl)-1;
        for ($i=0; $i<= $sum ; $i++) { 
            if ($jk_dsn == "$jk_vl[$i]") {
                $checked = "checked";
            } else {
                $checked = "";
            }
            echo '<label class="radio-inline"><input type="radio" name="jk" id="jk" value="'.$jk_vl[$i].'" '.$checked.'>'.$jk[$i].'</label>';
        }
         ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sekolah">Alamat:</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo $alamat_dsn; ?>" class="form-control" name="sklh" placeholder="Masukan Nama Sekolah" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <strong><?php echo $email_user; ?></strong>
    </div>
  </div>


<?php


$sql1 = "SELECT * FROM kelas NATURAL JOIN referensi_kls  WHERE id_user = '$id_user' ";
$mk = $conn->query($sql1);
while($view_mk=$mk->fetch_assoc()){
    $i=1;
    echo "<div class='form-group'>
    <label class='control-label col-sm-2' for='sekolah'>Kelas:</label>
    <div class='col-sm-10'>
      <input type='text' value='$view_mk[nama_kls]'class='form-control' name='$i' placeholder='Masukan Nama Sekolah' required>
    </div>
  </div>";
  $i++;
}


?>





  
</form>
<?php
} else {
    echo "Data tidak ditemukan";
}
 ?>
 