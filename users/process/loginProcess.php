<?php

    include "../../model/User_model.php";

    $user = new User_model();

    $username = $_POST['username'];
    $hak_akses = $user->hak_akses($username);
    $password = md5($_POST['password']);
    if($user->loginUser($username, $password) > 0){
		if($user->validasi_email($username) =='Verifikasi'){
			if($hak_akses == 'user'){
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['hak_akses'] = $hak_akses;
				header('location: ../dashboard.php');
			}else if($hak_akses == 'admin') {
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['hak_akses'] = $hak_akses;
				header('location: ../admin/dashboard-admin.php');
			}
		} else if($user->validasi_email($username) =='Belum Verifikasi'){
			header('location: ../pesan_verify.php');
		}
    } else {
        echo "<script>window.alert('Username atau password yang anda masukkan salah!');
              window.location.href='../../?msg=error';</script>";
    }


?>
