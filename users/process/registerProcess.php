<?php

    include_once("../../model/User_model.php");

    $user = new User_model();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        if($user->checkUser($username, $email) > 0){
            echo "<script>alert('Username atau email sudah digunakan');
                        location = '../register.php';
                </script>";
        }else{
            $user->register($username, $email, $password);
            header('location: ../login.php');
        }

    }
        echo "<script>alert('Password harus sama');
                      location = '../register.php';
              </script>";



?>
