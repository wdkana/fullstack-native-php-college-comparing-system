<?php
    include "../../model/Tanya_model.php";
	include "../../model/Lupapass_model.php";
    $tanya = new Tanya_model();
	$pass = new Lupapass_model();
	
    $id = $_POST['id'];
    $username = $_POST['username'];
    $jawaban = $_POST['jawaban'];
	$pertanyaan = $_POST['pertanyaan'];
	$email = $_POST['email'];
    $tanya->addJawaban($id,$username,$jawaban);
    if($tanya == TRUE){
	  $pass->jawab($email, $username, $pertanyaan, $jawaban);
      header('location: ../dashboard.php');
    } else {
        echo "data gagal disimpan";
    }



?>
