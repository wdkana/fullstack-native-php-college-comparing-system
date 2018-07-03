<?php
    include "../../model/Akreditasi_model.php";

    $ak = new Akreditasi_model();

    $nama_kampus = $_POST['nama_kampus'];
    $fakultas = $_POST['fakultas'];
    $akreditasi = $_POST['akreditasi'];

    if($ak->checkFakultas($fakultas) == 0){
        $ak->addAkreditasi($nama_kampus,$fakultas,$akreditasi);
        if($ak == TRUE){
            header('location:../akreditasi.php');
        } else {
            echo "data gagal diinput";
        }
    } else {
        echo "<script>window.alert('Maaf, jurusan ini sudah ada akreditasi !!');
              window.location.href='../akreditasi.php';</script>";
    }



?>
