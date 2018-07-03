<?php
  include_once "Database_Connection.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../assets/Archive/phpmailer/src/Exception.php';
    require '../../assets/Archive/phpmailer/src/PHPMailer.php';
    require '../../assets/Archive/phpmailer/src/SMTP.php';
    require '../../assets/Archive/vendor/autoload.php';
    /**
     *
     */
    class User_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk register
      public function register($username, $email, $password){

          $sql = "INSERT INTO `tbl_register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk check username
      public function checkUser($username, $email){

          $sql = "SELECT * FROM tbl_register WHERE username = '$username' OR email = '$email'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;

      }

      //function untuk login username
      public function loginUser($username, $password){

          $sql = "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk check user detail
      public function detailProfil($username){

          $sql = "SELECT * FROM tbl_detail_profil WHERE username = '$username'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk insert detail profil
      public function setProfil($username, $nim, $asal_kampus, $nama_lengkap, $fakultas, $kelas, $no_hp, $foto_ktm, $status, $status_kerja){

          $sql = "INSERT INTO `tbl_detail_profil` (`id`, `username`, `nim`, `asal_kampus`,`nama_lengkap`, `fakultas`, `kelas`, `no_hp`, `foto_ktm`, `status`, `status_kerja`) VALUES
          (NULL, '$username', '$nim', '$asal_kampus','$nama_lengkap', '$fakultas', '$kelas', '$no_hp', '$foto_ktm', '$status', '$status_kerja');";
          $query = mysql_query($sql);
          return $query;

      }

      //function untuk menampilkan nama Kampus
      public function kampus($username){

        $sql = "SELECT * FROM tbl_detail_profil WHERE username = '$username'";
        $query = mysql_query($sql);
        return $query;
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

?>
