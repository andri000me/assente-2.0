<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="lib/img/assente.png">
    <link href="./lib/style.css" type="text/css" rel="stylesheet">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./lib/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./lib/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <nav>
        <!--Logo-->
        <a href="#" class="logo"><img src="lib/img/logo.jpeg" alt="Login Icon" class="logonavbar"></a>
        <!--Menu-->
        <ul>
            <li><a href="view/about.php"class="about">About Us</a></li>
        </ul>
</nav>

  <section>
        <!--Text-->
        <div class="text-container">
            <p></p>
            <p>Absensi <span style="color: #3C64B1; font-size: 4vw;">Kehadiranmu</span></p>
            <h3>Online Attendance lets you easily monitor, record and <br>evaluate the Attendance of students, <br>both at home and on campus </h3>
            
        </div>
    </section>

    <div class="sampul">
        <div class="kolom-login">
            <img src="lib/img/logo.jpeg" alt="Login Icon" class="gambarprofil">
            <h1> </h1>
            <form action="model/proses.php" method="POST">
        <!-- <div class='alert alert-danger'><strong>Info : Telah dilakukan pembersihan User, untuk dapat masuk silahkan hubungi <a href="http://fb.me/rizal.ofdraw" title="Hubungi Admin">Admin</a>.<br />Mohon maaf atas ketidaknyamanan ini, Terimakasih.</strong></div>
        <div class='alert alert-success'>
        <strong>Untuk sekedar melihat-lihat Anda dapat menggunakan akun sementara :<br />
        User : siswa@siswa.siswa <br />
        Pass : siswa
        </strong>
        </div> -->
        <?php
        
            if (isset($_GET['log'])) {
                if ($_GET['log']==2) {
                    echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                }
            }
         ?>
                <p>E-Mail</p>
                <input type="text" name="email" id="inputEmail" placeholder="Email address">
                <p>Password</p>
                <input type="password" name="pwd" id="inputPassword" placeholder="Masukkan Password">
			        	<input id="login" type="submit" name="login" value="Sign-in">
            </form>
        </div>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./lib/ie10-viewport-bug-workaround.js"></script>
  

</body></html>