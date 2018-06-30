<?php
    include_once("../../model/Ulasan_model.php");

    $ulasan = new Ulasan_model();
    session_start();

      echo $username = $_SESSION['username'];
    echo $nama_kampus = $_POST['nama_kampus'];
    echo $tanggal = date('Y-m-d');
    echo $judul = $_POST['judul'];
    echo $ulasan = $_POST['ulasan'];
    echo $tag = $_POST['tag'];

    $ulasan->inputNilai($username, $nama_kampus, $tanggal, $judul, $ulasan, $tag);

?>
