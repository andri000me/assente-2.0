<?php
$kode = $_GET['id_adm'];
$sql ="SELECT id_user FROM kelas NATURAL JOIN referensi_kls WHERE kode_kls = '$kode' AND lvl ='sw'";

$q = "SELECT * FROM kelas NATURAL JOIN referensi_kls NATURAL JOIN detail_user WHERE id_user = id_user AND kode_kls = '$kode' AND lvl ='sw'";
$query_siswa = $conn->query($q);

echo "<table class='table table-striped' style='width:70%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $query_siswa = $conn->query($q);
                    $no=0;
                    while ($get_siswa = $query_siswa->fetch_assoc()) {
                        $id_siswa = $get_siswa['nis_user'];
                        $name = $get_siswa['name_user'];
                        $school = $get_siswa['sklh_user'];
                        $no++;
                        echo "<tr>
                                <td>$no</td>
                                <td>$id_siswa</td>
                                <td><strong>$name</strong></td>
                                <td>$school</td>
                            </tr>";
                    }
                   // $conn->close();
                    echo "</tbody></table>";

?>