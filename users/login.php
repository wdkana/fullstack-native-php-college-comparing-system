<?php
		session_start();

		if(isset($_SESSION['username'])){
				header('location: dashboard.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	


  <link href="../assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Banding kampus</title>

  <!-- CSS  -->
    <link rel="icon" href="../assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="../assets/images/favicon/apple-touch-icon-152x152.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

    <script src="../ckeditor/ckeditor.js"></script>
</head>
<body style="background: #45598c">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <a class="btn-floating btn-small waves-effect waves-light" style="margin-top: 10px; background: #45598c" href="../"><i class="material-icons">arrow_back</i></a>
      <form class="login-form" action="process/loginProcess.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <h4 style="color: #45598c">Masuk Akun</h4>
          </div>

        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="username" name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="password" name="password" type="password">
            <label for="password">Password</label> <br><br>
            <button type="submit" value="Login" class="btn waves-effect waves-light col s12" style="background: #45598c">Login</button>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s12">
            <p">Belum punya akun? <a href="register.php">Daftar Disini</a></p>
			<p"><a href="lupaPassword.php">Lupa Password</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- ================================================
                         Scripts
     ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../assets/js/plugins.js"></script>

</body>
</html>
