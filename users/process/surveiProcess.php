<?php
    include_once("../../model/Survei_model.php");
    session_start();
    $username = $_SESSION['username'];
    $survei = new Survei_model();

	  $kampus = $_POST['id'];
    $dosen = $_POST['pilihan1'];
    $jurusan = $_POST['pilihan2'];
    $lingkungan = $_POST['pilihan3'];
    $prestasi = $_POST['pilihan4'];
    $mata_kuliah = $_POST['pilihan5'];
    $biaya = $_POST['pilihan6'];

    $survei->inputNilai($kampus, $username, $dosen, $jurusan, $lingkungan, $prestasi, $mata_kuliah, $biaya);
    if($survei == TRUE){
        header('location: ../dashboard.php');
    } else {
        echo "gagal input data";
    }

?>
