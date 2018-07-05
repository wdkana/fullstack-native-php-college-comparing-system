<?php
    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location:../');
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
