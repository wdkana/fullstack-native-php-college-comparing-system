<?php
    include "../../model/Akreditasi_model.php";

    $akr = new Akreditasi_model();
    $id = $_POST['id'];
    $akreditasi = $_POST['akreditasi'];
    $fakultas = $_POST['fakultas'];

    $akr->editAkreditasi($id,$fakultas,$akreditasi);
    if($akr == TRUE){
        header('location:../akreditasi.php');
    } else {
      echo "data tidak berubah";
    }

?>
