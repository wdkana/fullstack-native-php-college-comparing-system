<?php
    include_once("../../model/Survei_model.php");

    $survei = new Survei_model();

	$kampus = $_POST['id'];
    $pilihan1 = $_POST['pilihan1'];
    $pilihan2 = $_POST['pilihan2'];
    $pilihan3 = $_POST['pilihan3'];
    $pilihan4 = $_POST['pilihan4'];
    $pilihan5 = $_POST['pilihan5'];
    $pilihan6 = $_POST['pilihan6'];
    $pilihan7 = $_POST['pilihan7'];
	
	$survei->inputNilai($kampus, $pilihan1, $pilihan2, $pilihan3, $pilihan4, $pilihan5, $pilihan6, $pilihan7);
	header('location: ../dashboard.php');
?>