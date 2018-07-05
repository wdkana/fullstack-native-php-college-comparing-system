<?php
    include "../../../model/Kampus_model.php";

    $kampus = new Kampus_model();

    $id = $_GET['i'];

    if($kampus->deleteKampus($id) == TRUE){
       header('location: ../kampus.php');
    } else {
        echo "gagal menghapus data";
    }
?>
