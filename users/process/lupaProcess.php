<?php
      include "../../model/User_model.php";

      $mail = new User_model();

      $email = $_POST['email'];
	  $verivikasi = $mail->check_mail($email);
	          if(isset($_POST['kirim'])){
				  if($verivikasi==true){
					  $mail->send_mail($email);
				  } else {
					  echo "email tidak terdaftar";
				  } 
			  }else {
				  echo "Something wrong";  
			  }					  
?>
