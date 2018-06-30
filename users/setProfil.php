<?php
    include "../model/User_model.php";
    $user = new User_model();
    session_start();
    $username = $_SESSION['username'];

    if(!$username){
        header('location: login.php');
    }
    if($user->detailProfil($username) > 0){
        header('location: dashboard.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Banding Kampus</title>

<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="../assets/images/favicon/mstile-144x144.png">

<link rel="icon" href="../assets/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon-precomposed" href="../assets/images/favicon/apple-touch-icon-152x152.png">

<link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="../assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

<script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>    
  <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="../assets/js/plugins.js"></script>
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
  <link href="../assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="process/setProfilProcess.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Setting Profil</h4>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="nim" name="nim" type="number">
            <label for="nim" class="center-align">NIM</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="asal_kampus" name="asal_kampus" type="text">
            <label for="asal_kampus" class="center-align">Asal Kampus</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="nama_lengkap" name="nama_lengkap" type="text">
            <label for="nama_lengkap" class="center-align">Nama Lengkap</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="fakultas" name="fakultas" type="text">
            <label for="fakultas">Fakultas</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="kelas" name="kelas" type="text">
            <label for="kelas">Kelas</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="no_hp" name="no_hp" type="number">
            <label for="no_hp">No HP</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <label>Foto KTM</label><br><br><br>
            <input name="foto_ktm" type="file">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="simpan" value="Simpan" class="btn waves-effect waves-light col s12 blue"><br><br>
            <a href="process/logoutProcess.php">logout</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
