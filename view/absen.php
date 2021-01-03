<h1 class="page-header">Absen</h1>

<?php

$this_day = date("d");
$this_month =date("m");
$hari = date("l");
$sql2 ="SELECT id_kelas FROM referensi_kls WHERE id_user = '$_SESSION[id]'";
$query1 = $conn->query($sql2);

$get_kls=$query1->fetch_assoc();
$id_kls= $get_kls['id_kelas'];



$sql3="SELECT * FROM kelas NATURAL JOIN referensi_kls WHERE id_user = '$_SESSION[id]' AND jadwal_hari = '$hari' ";
$kelas = $conn->query($sql3);
$row = $kelas->num_rows;

$sql = "SELECT*FROM data_absen NATURAL JOIN bulan NATURAL  JOIN tanggal WHERE id_bln ='$this_month' AND nama_tgl='$this_day' AND id_user='$_SESSION[id]'";
$query_tday = $conn->query($sql);

 $query_tday->num_rows;



// Notifikasi Absen
	if (isset($_GET['ab'])) {
		if ($_GET['ab']==1) {
			echo "<div class='alert alert-warning'><strong>Terimakasih, Absen berhasil.</strong></div>";
		} elseif($_GET['ab']==2) {
			echo "<div class='alert alert-danger'><strong>Maaf, Absen Gagal. Silahkan Coba Kembali!</strong></div>";
		}elseif($_GET['ab']==3){
                     echo "<div class='alert alert-warning'><strong>Anda Telah izin,Silahkan menulis alasan izin jika ada.</strong></div>";
              }
	}
echo "<div class='table-responsive'>
           <table class='table table-striped'>
            <thead>
               <tr>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Absen ke-1</th>
                <th>Absen ke-2</th>
                <th>Izin</th>
               </tr>
            </thead>
            <tbody>";



if($row > 0){
       
       while($view_kls=$kelas->fetch_assoc()){
              $nama_kls = $view_kls['nama_kls'];
              $idKls = $view_kls['kode_kls'];
              $message = "Anda Belum Mengisi Absen $nama_kls Hari Ini";
              $status='./lib/img/warning.png';
              $disable_out = "";
              $disable_in = "";

              $get_absen= $query_tday->fetch_assoc();
              $keluar = $get_absen['jam_klr'];
              $izin = $get_absen['jam_izin'];
              if ($get_absen['jam_klr']!="" || $get_absen['jam_izin'] !="") {
                     $status='./lib/img/complete.png';
                     $message = "Absensi hari ini selesai! Terimakasih.";
                     $disable_out = "";
                     $disable_in = "";
              }elseif($get_absen['jam_klr'] ===""){
                     $status='./lib/img/minus.png';
                     $message = "Absen ke 1 selesai, jangan lupa absen ke 2 !";
                     $disable_out = "";
              }
              echo 	"<tr>
        <td><img src='$status' width='30px'/></td>
        <td><h5>$message</h5></td>
        <td><button type='button' name='absen1' class='btn btn-warning' onclick=\"window.location.href='./model/proses.php?absen=1&idkls=$idKls';\" $disable_in>Absen Ke-1</button></td>
        <td><button type='button' name='absen2' class='btn btn-danger' onclick=\"window.location.href='./model/proses.php?absen=2&idkls=$idKls';\" $disable_out>Absen Ke-2</button></td>
        <td><button type='button' name='absen3' class='btn btn-danger' onclick=\"window.location.href='./model/proses.php?absen=3&idkls=$idKls';\" $disable_in>Izin</button></td>
        </tr>";
              
}
echo "</table></div>";
}
else{
       $message = "Anda Hari Ini Tidak Ada Jadwal Perkuliahan";
       $status='./lib/img/complete.png';
       $disable_in = "disabled='disabled'";
       $disable_out = " disabled='disabled'";
       echo 	"<tr>
        <td><img src='$status' width='30px'/></td>
        <td><h5>$message</h5></td>
        <td><button type='button' name='absen1' class='btn btn-warning' onclick=\"window.location.href='./model/proses.php?absen=1';\"$disable_in>Absen Ke-1</button></td>
        <td><button type='button' name='absen2' class='btn btn-danger' onclick=\"window.location.href='./model/proses.php?absen=2';\"$disable_out>Absen Ke-2</button></td>
        <td><button type='button' name='absen3' class='btn btn-danger' onclick=\"window.location.href='./model/proses.php?absen=3';\"$disable_in>Izin</button></td>
        </tr>";
        echo "</table></div>";
}


?>