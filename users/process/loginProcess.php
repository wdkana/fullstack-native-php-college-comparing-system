<?php

    include "../../model/User_model.php";

    $user = new User_model();

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if($user->loginUser($username, $password) > 0){
        session_start();
        $_SESSION['username'] = $username;
        header('location: ../dashboard.php');
    } else {
        header("location:../login.php?msg=error");
    }


?>
