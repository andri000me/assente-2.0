<h3 class='page-header'>Rekap Absen</h3>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
	<div class='table-responsive'>
	<?php 
		if (isset($_GET['id_siswa'])) {
			if ($_GET['id_siswa']!=="") {
				$id_user=$_GET['id_siswa'];
				include './view/detail_absen.php';
			} else {
				header("location:absensi");
			}
		} else {
			$sql = "SELECT * FROM data_absen NATURAL JOIN detail_user WHERE kode_kelas = 'RPL-A'";
			$query = $conn->query($sql);
			if ($query->num_rows!==0) {
				echo "<h4 class='page-header'>Absensi RPL-A</h4>
				<table class='table table-striped' style='width:50%'>
					<thead>
						<tr>
							<th>No</th>
							<th>NIM</th>
							<th>Nama Siswa</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>";
				$no=0;
				while ($get_siswa = $query->fetch_assoc()) {
					$id_siswa = $get_siswa['id_user'];
					$name = $get_siswa['name_user'];
					$school = $get_siswa['keterangan'];
					$nim = $get_siswa['nis_user'];
					$no++;
					echo "<tr>
							<td>$no</td>
							<td>$nim</td>
							<td>$name</td>
							<td>$school</td>
							
						</tr>";
				}
				echo "</tbody></table>";
				$conn->close();
			} else {
				echo "<div class='alert alert-danger'><strong>Tidak ada Mahasiswa untuk ditampilkan</strong></div>";
			}
		}
	 ?>
</div>