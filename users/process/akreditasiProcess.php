<?php
    include "../../model/Akreditasi_model.php";

    $ak = new Akreditasi_model();

    $nama_kampus = $_POST['nama_kampus'];
    if(isset($id_kampus)){
        echo $id_kampus;
    }
    echo $fakultas = $_POST['fakultas'];
    echo $akreditasi = $_POST['akreditasi'];

    $ak->addAkreditasi($nama_kampus,$fakultas,$akreditasi);
    header('location:../akreditasi.php');
?>
