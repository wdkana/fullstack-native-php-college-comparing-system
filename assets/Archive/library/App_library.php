<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../assets/Archive/phpmailer/src/Exception.php';
    require '../assets/Archive/phpmailer/src/PHPMailer.php';
    require '../assets/Archive/phpmailer/src/SMTP.php';
    require '../assets/Archive/vendor/autoload.php';

class App_library{

	public function get_code($collection_name)
	{
		if($collection_name=="collection_member"):
			$code = "MEM".date("YmdHis");
		elseif($collection_name=="collection_staff"):
			$code = "STA".date("YmdHis");
		elseif($collection_name=="collection_participant"):
			$code = "PAR".date("YmdHis");
		endif;
		
        return $code;
	}

	public function send_email($email, $hash)
	{
        
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
        $mail->Username = "fullsnackwebdeveloper@gmail.com";
        $mail->Password = "preciousprotection";
        $mail->setFrom('fullsnackwebdeveloper@gmail.com', 'Email Verification');
        $mail->addAddress($email, 'Fullsnack Community');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = trim("Registrasi | Verifikasi");
        $blank = ' ';
        $message = '
        <html>
        <head>
        <style>
            .tombol {
                padding: 10px;
                background: #2ca8e0;
                border-radius: 5px;
                text-decoration:none;
                color:white;
            }
            table {
                border-top: 1px solid #2ca8e0;
            border-bottom: 1px solid #2ca8e0;
            border-left: 1px solid #2ca8e0;
            border-right: 1px solid #2ca8e0;
            padding: 10px;
            }
        </style>
        </head>
            <body style="font-family:calibri">
                  <center> <table width="400">
                    <tr>
                        <td style="padding-bottom:20px;">
                        <h4> Terimakasih telah mendaftar sebagai member fullsnack.org, ' .$email. '! </h4>
                        <p> Silahkan konfirmasi dengan cara klik tombol dibawah ini.</p> <br>
                        <a class="tombol" href="http://localhost/fullsnack.org/p/register/confirmation/index.php?email=' .$email. '&hash=' .$hash. '"> Konfirmasi </a>
                    </tr>
                    <tr>
                      <td style=" height:50; text-align:center"> <a style="text-decoration:none; color:#2ca8e0;" href="http://localhost/fullsnack.org/p/"> Fullsnack bandung </a> </td>
                    </tr>
                  </table> </center>
            </body>
        </html>';
        $mail->MsgHTML($message);
            if(!$mail->send()) 
            {
                session_start();
                $_SESSION['confirmation-email'] = FALSE;
                header("Location: http://localhost/fullsnack.org/p/register/confirm_err/");
            }
            else
            {
                session_start();
                $_SESSION['confirmation-email'] = TRUE;
                header("Location: http://localhost/fullsnack.org/p/register/confirm_page/");
            }
	    }
    }
?>