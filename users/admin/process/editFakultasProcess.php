<?php
	include "../../../model/Fakultas_model.php";

	$fks = new Fakultas_model();

	$fakultas = $_POST['fakultas'];
	$id = $_POST['id'];

	$fks->editFakultas($fakultas,$id);
	if($fks == TRUE){
		header('location:../kampus.php');
	} else {
		echo "gagal";
	}

?>