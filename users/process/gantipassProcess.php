<?php
    include "../../model/Lupapass_model.php";

    $user = new Lupapass_model();

	$old = md5($_POST['old']);
	$new = md5($_POST['new']);
	$newconfirm = md5($_POST['newconfirm']);
	$email = $_POST['email'];
	$cekpass = $user->check_pass($old, $email);

	if(isset($_POST['simpan'])){
		if($cekpass == 1){
			if($new == $newconfirm){
				$user->update_pass($new, $email);
				echo "<script>window.alert('Password berhasil diubah');
              window.location.href='../';</script>";
			} else {
				echo "Password tidak sesuai";
			}
		} else {
			echo "Password Salah";
		}

	}


?>
