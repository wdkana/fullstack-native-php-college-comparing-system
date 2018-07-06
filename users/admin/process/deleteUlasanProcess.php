<?php
	include "../../../model/Ulasan_model.php";

	$ul = new Ulasan_model();

	$id = $_GET['i'];
	$ul->deleteUlasan($id);
	if($ul == TRUE){
		header('location:../ulasan.php');
	} else {
		echo "gagal";
	}

?>