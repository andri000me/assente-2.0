<?php
if (strcmp($page, "absen")==0) {
        if (isset($_SESSION['sw'])) {
          include './view/absen.php';
        } elseif (isset($_SESSION['pb'])) {
          include './view/adm/absen.php';
        }
      }elseif (strcmp($page, "absensi")==0) {
        
        if (isset($_SESSION['sw'])) {
          include './view/detail_absen.php';
          } elseif (isset($_SESSION['pb'])) {
            include './view/adm/detail_absen.php';
          }
      }elseif (strcmp($page, "catatan")==0) {
        
        if (isset($_SESSION['sw'])) {
          include './view/note.php';
          } elseif (isset($_SESSION['pb'])) {
            include './view/adm/catatan.php';
          }
      }elseif (strcmp($page, "tambah_catatan")==0) {
        include './view/add_note.php';
      }elseif (strcmp($page, "req_catatan")==0) {
        if (!isset($_SESSION['pb'])) {
            header("location:home");
        }else {
            include './view/adm/req_catatan.php';
        }
      } elseif (strcmp($page, "add_siswa")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/adm/add_siswa.php';
        }
      } elseif (strcmp($page, "siswa")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/siswa.php';
        }
      }elseif (strcmp($page, "dosen")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/view_dos.php';
        }
      }
      elseif (strcmp($page, "admin")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/view_adm.php';
        }
      }
      elseif (strcmp($page, "kelas")==0) {
        if (!isset($_SESSION['pb'])) {
            header("location:home");
        }else {
            include './view/adm/kelas.php';
        }
      }
      elseif (strcmp($page, "add_adm")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/add_adm.php';
        }
      }
      elseif (strcmp($page, "msk_mhs")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/msk_mhs.php';
        }
      }
      elseif (strcmp($page, "daftar_kls")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/daftar_kls.php';
        }
      }
      elseif (strcmp($page, "add_dos")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/add_dos.php';
        }
      }
      elseif (strcmp($page, "add_matkul")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/add_matkul.php';
        }
      }
      elseif (strcmp($page, "add_kelas")==0) {
        if (!isset($_SESSION['adm'])) {
            header("location:home");
        }else {
            include './view/admin/add_kelas.php';
        }
      }
      elseif (strcmp($page, "kelasku")==0) {
        if (!isset($_SESSION['sw'])) {
            header("location:home");
        }else {
            include './view/kelas.php';
        }
      }
      elseif (strcmp($page, "kelasku1")==0) {
        if (!isset($_SESSION['pb'])) {
            header("location:home");
        }else {
            include './view/adm/kelasku.php';
        }
      }
      elseif (strcmp($page, "print")==0) {
        if (!isset($_SESSION['pb'])) {
            header("location:home");
        }else {
            include './view/adm/print.php';
        }
      }
       elseif (strcmp($page, "katasandi")==0) {
        if (!isset($_SESSION['pb'])) {
            header("location:home");
        }else {
            include './view/adm/katasandi.php';
        }
      } elseif (strcmp($page, "keluar")==0) {
        header("location:view/logout.php");
      } else {
        header("location:absen");
      }
?>