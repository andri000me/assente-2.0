<?php

$kode = $_GET['id_adm'];

$sql = "SELECT * FROM data_absen NATURAL JOIN detail_user NATURAL JOIN hari NATURAL JOIN tanggal NATURAL JOIN bulan WHERE kode_kelas = '$kode'";
$query = $conn->query($sql);
if ($query->num_rows!==0) {
    echo "<h4 class='page-header'>Absensi Kelas</h4>
    <table class='table table-striped' style='width:50%'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Siswa</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>";
    $no=0;
    while ($get_siswa = $query->fetch_assoc()) {
        $kode =$get_siswa['kode_kelas'];
        $date = "$get_siswa[nama_hri], $get_siswa[nama_tgl] $get_siswa[nama_bln] ".date("Y");
        $name = $get_siswa['name_user'];
        $school = $get_siswa['keterangan'];
        $nim = $get_siswa['nis_user'];
        $no++;
        echo "<tr>
                <td>$no</td>
                <td>$nim</td>
                <td>$name</td>
                <td>$date</td>
                <td>$school</td>
                
            </tr>";
            
    }
    echo "</tbody></table>";
    echo"<a href='print&kode=$kode' title='Edit $kode'>print</a>";
    $conn->close();
} else {
    echo "<div class='alert alert-danger'><strong>Tidak ada Mahasiswa untuk ditampilkan</strong></div>";
}




?>