<?php
	include "../../../model/Fakultas_model.php";

	$fks = new Fakultas_model();

	$id = $_GET['i'];
	$fks->deleteFakultas($id);
	if($fks == TRUE){
		header('location:../kampus.php');
	} else{
		echo "gagal";
	}
?>