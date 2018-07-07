<?php
    include "../../model/Tanya_model.php";

    $tanya = new Tanya_model();

    $kampus = $_POST['kampus'];
    $email = $_POST['email'];
    $pertanyaan = $_POST['pertanyaan'];

    $tanya->addPertanyaan($email,$kampus,$pertanyaan);
    if($tanya == TRUE){
        echo "<script>window.alert('silahkan tunggu beberapa saat, jawaban akan dikirim melalui email');
                window.location.href='../../';</script>";
    } else {
        echo "data gagal disimpan";
    }



?>
