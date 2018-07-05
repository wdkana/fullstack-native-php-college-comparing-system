<?php
    include "../../../model/Survei_model.php";

    $survei = new Survei_model();

    $id = $_GET['i'];
    $survei->deletePertanyaan($id);
    
    if($survei == TRUE){
        header('location: ../pertanyaan.php');
    } else {
        echo "data gagal dihapus!";
    }


?>
