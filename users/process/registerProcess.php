<?php

    include_once("../../model/User_model.php");
    include_once("../../model/Lupapass_model.php");

    $user = new User_model();
	$mail = new Lupapass_model();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);

    if($password == $repassword){
        if($user->checkUser($username, $email) > 0){
            echo "<script>alert('Username atau email sudah digunakan');
                        location = '../../';
                </script>";
        }else{
            $user->register($username, $email, $password);
			      $send = $mail->mail_verify($email);
            header('location: ../../');
        }

    }
        echo "<script>alert('Password harus sama');
                      location = '../../';
              </script>";



?>
