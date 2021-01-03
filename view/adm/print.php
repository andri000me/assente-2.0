<?php
require_once __DIR__ . '/vendor/autoload.php';

$kode = $_GET['kode'];
$date = date("Y-m-d");
    $query = "SELECT * FROM data_absen NATURAL JOIN detail_user NATURAL JOIN hari NATURAL JOIN tanggal NATURAL JOIN bulan WHERE kode_kelas = '$kode'";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    $date = "$rows[nama_hri], $rows[nama_tgl] $rows[nama_bln] ".date("Y");
$tabel = '
<h3 style="text-align: center;">Fakultas Sains dan Teknologi</h3>
<h3 style="text-align: center;">Universitas Islam Negeri Syarif Hidayatullah Jakarta</h3>

<table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
            <th class="short">NO</th>
                <th class="normal">NIM</th>
                <th class="normal">Nama</th>
                <th class="normal">Kode Kelas</th>
                <th class="normal">Waktu</th>
                <th class="normal">Keterangan</th>
            </tr>
        </thead>';

        $i = 1;
            foreach($rows as $p){
                $tabel .= '<tr>
                <td>'.$i++.'</td>
                <td>'.$p['nis_user'].'</td>
                <td>'.$p['name_user'].'</td>
                <td>'.$p['kode_kelas'].'</td>
                <td>'.$p['nama_hri'].''. $p['nama_tgl'].''. $p['nama_bln'].''.date('Y').'</td>
                <td>'.$p['keterangan'].'</td>
                </tr>';
            }
        $tabel .= '</table>';
        ob_clean(); 
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($tabel);
        $mpdf->Output('Absen.pdf','I');

?>
