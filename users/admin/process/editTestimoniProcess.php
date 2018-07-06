<?php
	include "../../../model/Testimoni_model.php";

	$test = new Testimoni_model();

	$id = $_POST['id'];
	$testimoni = $_POST['testimoni'];
	$test->editTestimoni($testimoni,$id);
	if($test == TRUE){
		header('location:../testimoni.php');
	} else {
		echo "gagal";
	}

?>