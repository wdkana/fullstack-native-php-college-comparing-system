<?php
    include_once("../../model/Ulasan_model.php");

    $insert = new Ulasan_model();

    session_start();

    $username = $_SESSION['username'];
    $nama_kampus = $_POST['nama_kampus'];
    $tanggal = date('Y-m-d');
    $judul = $_POST['judul'];
    $ulasan = $_POST['ulasan'];
    $tag = $_POST['tag'];

    $insert->addUlasan($username, $nama_kampus, $tanggal, $judul, $ulasan, $tag);
    if($insert == TRUE){
        header('location: ../dashboard.php');
    } else {
        echo "gagal input data";
    }

?>
