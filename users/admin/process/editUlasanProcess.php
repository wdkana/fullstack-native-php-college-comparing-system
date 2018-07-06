<?php
	include "../../../model/Ulasan_model.php";
	$ul = new Ulasan_model();

	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$ulasan = $_POST['ulasan'];
	$tag = $_POST['tag'];

	$ul->updateUlasan($judul,$ulasan,$tag,$id);
	if($ul == TRUE){
		header('location:../ulasan.php');
	} else {
		echo "gagal	";
	}
?>