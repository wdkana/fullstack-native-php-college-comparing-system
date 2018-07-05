<?php
	include "../../model/Testimoni_model.php";

	$testimoni = new Testimoni_model();

	$id = $_GET['i'];
	$testimoni->deleteTestimoni($id);
	header('location:../testimoni.php');

?>