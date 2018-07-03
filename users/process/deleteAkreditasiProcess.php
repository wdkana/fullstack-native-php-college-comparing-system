<?php
    include "../../model/Akreditasi_model.php";

    $akreditasi = new Akreditasi_model();

    $id = $_GET['i'];
    $akreditasi->deleteAkreditasi($id);
    
    if($akreditasi == TRUE){
        header('location: ../akreditasi.php');
    } else {
        echo "data gagal dihapus!";
    }


?>
