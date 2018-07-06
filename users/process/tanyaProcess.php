<?php
    include "../../model/Tanya_model.php";

    $tanya = new Tanya_model();

    $kampus = $_POST['kampus'];
    $email = $_POST['email'];
    $pertanyaan = $_POST['pertanyaan'];

    $tanya->addPertanyaan($email,$kampus,$pertanyaan);
    if($tanya == TRUE){
      header('location: ../../index.php');
    } else {
        echo "data gagal disimpan";
    }



?>
