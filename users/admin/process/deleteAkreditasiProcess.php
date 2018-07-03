<?php
    include "../../../model/Akreditasi_model.php";

    $akreditasi = new Akreditasi_model();

    $id = $_GET['i'];
	$idk = $_GET['id'];
    $akreditasi->deleteAkreditasi($id);
    
    if($akreditasi == TRUE){
        header('location: ../akreditasi.php?id='. $idk);
    } else {
        echo "data gagal dihapus!";
    }


?>
