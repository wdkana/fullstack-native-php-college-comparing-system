<?php
    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
      header('location: ../../');
    }
     if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ubah Password</title>
  </head>
  <body>
    <h1>Ubah Password Admin</h1>
    <form action="process/ubahPasswordProcess.php" method="post">
      masukkan password lama
      <input type="password" name="old"><br>
      masukkan password baru
      <input type="password" name="new"><br>
      masukkan ulang password
      <input type="password" name="repassword"><br>
      <input type="submit" value="simpan">
    </form>
  </body>
</html>
