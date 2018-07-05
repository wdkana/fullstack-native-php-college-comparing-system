<?php
    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];
    if(!isset($username)){
        header('location:../');
    }
    if($hak_akses == 'admin'){
      header('location:admin/dashboard-admin.php');
    } 
?>

<html>
  <head>

    <title>Setting Profil</title>
  </head>
  <body>
      <a href="settingProfil.php">Setting profil</a><br>
      <a href="settingPassword.php">Ubah Password</a>
  </body>
</html>
