<?php
    include "../../model/User_model.php";

    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];
    $result = $user->getPassword($username);
    $row = mysql_fetch_array($result);
    $password = $row['password'];

    $oldPassword = md5($_POST['old']);
    $newPassword = md5($_POST['new']);
    $rePassword = md5($_POST['repassword']);

    if($oldPassword == $password){
        if($newPassword == $rePassword){
          $user->updatePassword($username, $newPassword);
          if($user == TRUE){
              header('location: ../dashboard.php');
          } else {
              echo "gagal diubah";
          }
        } else {
          echo "<script>window.alert('Password harus sama!');
                window.location.href='../settingPassword.php';</script>";
        }

    } else {
        echo "<script>window.alert('Password harus sama!');
              window.location.href='../settingPassword.php';</script>";
    }


?>
