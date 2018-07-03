<?php
    include "../../model/User_model.php";

    $user = new User_model();
	  
	$old = $_POST['old'];
	$new = $_POST['new'];
	$newconfirm = $_POST['newconfirm'];
	$email = $_POST['email'];
	$cekpass = $user->check_pass($old, $email);
	
	if(isset($_POST['simpan'])){
		if($cekpass == 1){
			if($new == $newconfirm){
				$user->update_pass($new, $email);
				echo "Password berhasil diubah";
				echo "<a href='http://localhost/bandingkampus/users/login.php'> kembali </a>";
			} else {
				echo "Password tidak sesuai";
			}
		} else {
			echo "Password Salah";
		}

	}


?>