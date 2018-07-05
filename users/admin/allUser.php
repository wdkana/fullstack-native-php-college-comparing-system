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
    <title>User</title>
  </head>
  <body>
    <h1>untuk crud user</h1>
  </body>
</html>
