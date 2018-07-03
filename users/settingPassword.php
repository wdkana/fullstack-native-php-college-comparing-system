<?php
    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location:login.php');
    }
    
?>

<html>
  <head>
 
    <title></title>
  </head>
  <body>

  </body>
</html>
