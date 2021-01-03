<div class='table-responsive'>
	<?php 
		$sql3="SELECT * FROM kelas NATURAL JOIN referensi_kls WHERE id_user = '$_SESSION[id]' ";
        $kelas = $conn->query($sql3);
        

			
			if ($kelas->num_rows!==0) {
				echo "<h4 class='page-header'>Jadwal Kelas</h4>
				<table class='table table-striped' style='width:50%'>
					<thead>
                        <tr>
                            <th>NO</th>
							<th>Kode Kelas</th>
							<th>Nama Kelas</th>
							<th>Ruangan</th>
                            <th>Hari</th>
                            <th>Jam</th>
						</tr>
					</thead>
					<tbody>";
				$no=0;
				while ($get_siswa = $kelas->fetch_assoc()) {
					$kode = $get_siswa['kode_kls'];
					$name = $get_siswa['nama_kls'];
					$ruangan = $get_siswa['ruangan'];
                    $hari = $get_siswa['jadwal_hari'];
                    $jam =$get_siswa['jam'];
					$no++;
                    echo "<tr>
                             <td>$no</td>
							<td>$kode</td>
							<td>$name</td>
							<td>$ruangan</td>
							<td>$hari</td>
							<td>$jam</td>
							
						</tr>";
				}
				echo "</tbody></table>";
				$conn->close();
			} else {
				echo "<div class='alert alert-danger'><strong>Anda Tidak Mempunyai Kelas</strong></div>";
			}
		
	 ?>
</div>