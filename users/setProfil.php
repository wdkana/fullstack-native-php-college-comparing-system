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
	<?php include 'views/head.php'; ?>
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
	<?php include 'views/script.php'; ?>
</body>
</html>
