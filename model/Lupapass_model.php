<?php
  include_once "Database_Connection.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../assets/Archive/phpmailer/src/Exception.php';
    require '../../assets/Archive/phpmailer/src/PHPMailer.php';
    require '../../assets/Archive/phpmailer/src/SMTP.php';
    require '../../assets/Archive/vendor/autoload.php';
	
	class Lupapass_model{

      public function __construct(){
          $connection = new Database_Connection();
      }
	  
	  public function check_mail($email){
		  $mail = false;
		  $sql = "SELECT * FROM tbl_register WHERE email = '$email'";
		  $query = mysql_query($sql);
		  if(mysql_num_rows($query) == 1){
			$mail = true;
		  } else {
			$mail = false;
		  }
		  return $mail;
	  }
	  
	  public function send_mail($email){
			
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);
		$mail->Host = 'tls://smtp.gmail.com:587';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "alsagunadi@gmail.com";
		$mail->Password = "aschente";
		$mail->setFrom('alsagunadi@gmail.com', 'Reset Password');
		$mail->addAddress($email, 'Banding Kampus');
		$mail->isHTML(true);
		// Set email format to HTML
		$mail->Subject = trim("Reset Password | Verifikasi");
		$blank = ' ';
		$message = '
		<html>
		<head>
		</head>
			<body">
				<p> Silahkan reset password dengan cara klik tombol dibawah ini.</p> <br>
				<a class="tombol" href="http://localhost/bandingkampus/users/gantiPassword.php?email=' .$email.'"> Konfirmasi </a>
				</body>
			</html>';
			$mail->MsgHTML($message);
			
			if(!$mail->send()) 
            {
                echo "email gagal";

            }
            else
            {
				header("Location: http://localhost/bandingkampus/");
            }

			}
			
			public function update_pass($new, $email){
				$sql = "UPDATE `tbl_register` SET `password` = '$new' WHERE `email` = '$email'";
				$query = mysql_query($sql);
				return $query;
			}
			
		  public function check_pass($old, $email){
			  $mail = false;
			  $sql = "SELECT * FROM tbl_register WHERE password = '$old' and email='$email'";
			  $query = mysql_query($sql);
			  if(mysql_num_rows($query) == 1){
				$mail = true;
			  } else {
				$mail = false;
			  }
			  return $mail;
		  }	  
	  
	}