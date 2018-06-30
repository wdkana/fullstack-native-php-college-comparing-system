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
<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <a class="btn-floating btn-small waves-effect waves-light" style="margin-top: 10px; background: #45598c" href="../"><i class="material-icons">arrow_back</i></a>
      <form class="login-form" action="process/registerProcess.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
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
            <input id="email" name="email" type="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="password-again" name="repassword" type="password">
            <label for="password-again">Ulangi Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" value="Register" class="btn waves-effect waves-light col s12 blue">Register</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Sudah Punya Akun? <a href="login.php">Login Disini</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
	<?php include 'views/script.php'; ?>
</body>
</html>
