<?php
    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location:login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
