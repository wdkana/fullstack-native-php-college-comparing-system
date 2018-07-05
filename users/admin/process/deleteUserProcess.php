<?php
    include "../../../model/Profil_model.php";

    $profil = new Profil_model();

    $username = $_GET['i'];
    $profil->deleteMahasiswa($username);
    
    if($profil == TRUE){
        header('location: ../allUser.php');
    } else {
        echo "data gagal dihapus!";
    }


?>