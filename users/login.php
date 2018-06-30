<?php
		session_start();

		if(isset($_SESSION['username'])){
				header('location: dashboard.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'views/head.php'; ?>
  <link href="../assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Banding kampus</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background: #45598c">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <a class="btn-floating btn-small waves-effect waves-light" style="margin-top: 10px; background: #45598c" href="../"><i class="material-icons">arrow_back</i></a>
      <form class="login-form" action="process/loginProcess.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../assets/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
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
            <button type="submit" value="Login" class="btn waves-effect waves-light col s12 blue">Login</button>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s12">
            <p">Belum punya akun? <a href="register.php">Daftar Disini</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include 'views/script.php'; ?>
</body>
</html>
