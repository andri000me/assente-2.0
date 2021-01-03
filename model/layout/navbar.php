<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">         <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
  <a class="navbar-brand" href="home">Assente.</a>
  </div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right visible-xs visible-sm">
<li id="output_m"></li>
37
<?php
	if (isset($_SESSION['pb'])) {
		$link=array("","absen","catatan", "kelas", "katasandi&id=$_SESSION[id]","keluar");
		$name=array("","Absen","Lihat Izin", "Daftar Kelas", "Ubah Katasandi", "Keluar");

			for ($i=1; $i <= count($link)-1 ; $i++) {
				echo "<li><a href='$link[$i]'>$name[$i]</a></li>";
			}
   		} elseif (isset($_SESSION['sw'])) {
			$link=array("","absen","absensi","tambah_catatan","catatan","keluar");
			$name=array("","Absen","Absensiku","Izin","Izinku","Keluar");
			
			for ($i=1; $i <= count($link)-1 ; $i++) {
				
				echo "<li><a href='$link[$i]'>$name[$i]</a></li>";
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
</div>