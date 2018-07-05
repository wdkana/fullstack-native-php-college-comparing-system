<?php
    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: ../../');
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setting</title>
  </head>
  <body>
    <a href="ubahPassword.php">Ubah Password</a>
  </body>
</html>
