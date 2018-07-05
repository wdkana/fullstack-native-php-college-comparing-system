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
    <title>User</title>
  </head>
  <body>
    <h1>untuk crud user</h1>
  </body>
</html>
