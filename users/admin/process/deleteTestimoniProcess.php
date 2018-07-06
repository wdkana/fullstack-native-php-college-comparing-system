<?php
	include "../../../model/Testimoni_model.php";

	$test = new Testimoni_model();
	$id = $_GET['i'];

	$test->deleteTestimoni($id);
	if($test == TRUE){
		header('location:../testimoni.php');
	} else {
		echo "gagal";
	}
?>