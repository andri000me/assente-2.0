<ul class="nav nav-sidebar">
<li id="output"></li>
   <?php
   		if (isset($_SESSION['pb'])) {
   			$link=array("","absen","catatan", "kelas","keluar");
			$name=array("","Absen","Lihat Izin", "Daftar Kelas", "Keluar");

			for ($i=1; $i <= count($link)-1 ; $i++) {
				if (strcmp($page, "$link[$i]")==0) {
			        $status = "class='active'";
			      } else {
			      	$status = "";
			      }
			    /*if (mysql_num_rows($query_tday)==0 && $link[$i]==="absen") {
					$warning = "<img src='./lib/img/warning.png' width='20' />";
				} else {
					$warning = "";
				} */
				echo "<li $status><a href='$link[$i]'>$name[$i]</a></li>";
			}
   		} elseif (isset($_SESSION['sw'])) {
   			$this_day = date("d");
			$sql = "SELECT*FROM data_absen NATURAL LEFT JOIN tanggal WHERE nama_tgl='$this_day' AND id_user='$_SESSION[id]'";
			$query = $conn->query($sql);

			$query_tday = $query->fetch_assoc();


			$link=array("","absen","absensi","tambah_catatan","catatan","kelasku","keluar");
			$name=array("","Absen","Absensiku","Izin","Izinku","KelasKu","Keluar");
			
			for ($i=1; $i <= count($link)-1 ; $i++) {
				if (strcmp($page, "$link[$i]")==0) {
			        $status = "class='active'";
			      } else {
			      	$status = "";
			      }
			    if ($query->num_rows==0 && $link[$i]==="absen") {
					$warning = "";
				} else {
					$warning = "";
				}
				echo "<li $status><a href='$link[$i]'>$name[$i] $warning</a></li>";
			}
   		}elseif (isset($_SESSION['adm'])) {
			$link=array("","siswa","add_siswa","msk_mhs","add_dos","dosen", "add_adm","admin","add_matkul", "daftar_kls", "add_kelas", "keluar");
		 $name=array("","Daftar Mahasiswa","Tambah Mahasiswa", "Tambah Mahasiswa ke kelas", "Tambah Dosen","Daftar Dosen", "Tambah Admin", "Daftar Admin","Tambah Mata Kuliah", "Daftar Kelas", "Tambah Kelas", "Keluar");

		 for ($i=1; $i <= count($link)-1 ; $i++) {
			 if (strcmp($page, "$link[$i]")==0) {
				 $status = "class='active'";
			   } else {
				   $status = "";
			   }
			 /*if (mysql_num_rows($query_tday)==0 && $link[$i]==="absen") {
				 $warning = "<img src='./lib/img/warning.png' width='20' />";
			 } else {
				 $warning = "";
			 } */
			 echo "<li $status><a href='$link[$i]'>$name[$i]</a></li>";
		 }
		}
	?>
</ul>