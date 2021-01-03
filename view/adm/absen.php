<h3 class="page-header">Konfirmasi Absensi</h3>
<?php

$hari = date("l");

$sql3="SELECT * FROM kelas NATURAL JOIN referensi_kls WHERE id_user = '$_SESSION[id]' AND jadwal_hari = '$hari' ";
$kelas1 = $conn->query($sql3);
$row = $kelas1->num_rows;
$kl = $kelas1->fetch_assoc();
$kode=$kl['kode_kls'];

  $sql = "SELECT*FROM data_absen NATURAL LEFT JOIN bulan NATURAL JOIN hari NATURAL JOIN tanggal NATURAL JOIN detail_user WHERE st_jam_msk='Menunggu' OR st_jam_klr='Menunggu' OR st_jam_izin = 'Menunggu'";
  $query = $conn->query($sql);
  $row1 = $query->num_rows;
  


  // Notifikasi Absen
  	if (isset($_GET['ab'])) {
  		if ($_GET['ab']==1) {
  			echo "<div class='alert alert-warning'><strong>Absen telah dikonfirmasi.</strong></div>";
  		} elseif($_GET['ab']==2) {
  			echo "<div class='alert alert-danger'><strong>Gagal, Silahkan Coba Kembali!</strong></div>";
  		} elseif($_GET['ab']==3) {
        echo "<div class='alert alert-warning'><strong>Absen berhasil ditolak.</strong></div>";
      } 
  	} 

    if ($row > 0 && $row1 >0) {
          echo "<form method='post' action='./model/proses.php'>";
          echo "<tr><th colspan='6'>Yang ditandai :
          <button type='submit' class='btn btn-warning' name='acc_absen2'>Konfirmasi</button>&nbsp;
                  <button type='submit' class='btn btn-danger' name='dec_absen2'/>Tolak</button>
           </th></tr>";
          echo "<div class='table-responsive'>
                 <table class='table table-striped'>
                  <thead>
                     <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Keterangan</th>
                      <th>Hari, Tanggal</th>
                      <th>Pukul</th>
                      <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>";
          $no=0;
          while ($get_absen=$query->fetch_assoc()) {
            
            $id_absen = $get_absen['id_absen'];
            $id_user = $get_absen['id_user'];
            $name = $get_absen['name_user'];
            $kelas =$get_absen['kode_kelas'];
            $date = "$get_absen[nama_hri], $get_absen[nama_tgl] $get_absen[nama_bln] ".date("Y");
            if ($get_absen['st_jam_msk']==="Menunggu") {
              $type = "in";
              $status = "Absen Ke-1";
              $time = $get_absen['jam_msk'];
            }elseif ($get_absen['st_jam_klr']==="Menunggu") {
              $type = "out";
              $status = "Absen Ke-2";
              $time = $get_absen['jam_klr'];
            }elseif ($get_absen['st_jam_izin']==="Menunggu") {
              $type = "izin";
              $status = "Izin";
              $time = $get_absen['jam_izin'];
            }
            $no++; 

              echo  "<tr>
                  <td>
                    <input type='checkbox' name='id_absen[]' value='$id_absen,$type'/> <b>$no</b>
                  </td>
                  <td>$name</td>
                  <td>$kelas</td>
                  <td><strong><i>$status</i></strong></td>
                  <td>$date</td>
                  <td>$time</td>
                  <td>
                  <button type='button' class='btn btn-warning' onclick=\"window.location.href='./model/proses.php?acc_absen=$id_absen&type=$type&kelas=$kelas';\">Konfirmasi</button>&nbsp;
                  <button type='button' class='btn btn-danger' onclick=\"window.location.href='./model/proses.php?dec_absen=$id_absen&type=$type&kelas=$kelas';\">Tolak</button>
                  </td>
                  </tr>";
          }
          
          echo "</form></tbody></table></div>";
          $conn->close();
    } else {
        echo "<div class='alert alert-danger'><strong>Tidak ada permintaan Absen.</strong></div>";
    }
?>