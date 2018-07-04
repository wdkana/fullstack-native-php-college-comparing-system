<?php
    include "../../../model/Survei_model.php";

    $survei = new Survei_model();
    $id = $_POST['id'];
    $pertanyaan = $_POST['pertanyaan'];
    $pil1 = $_POST['pil1'];
    $pil2 = $_POST['pil2'];
    $pil3 = $_POST['pil3'];
    $pil4 = $_POST['pil4'];
    $pil5 = $_POST['pil5'];

    $survei->editPertanyaan($id,$pertanyaan,$pil1,$pil2,$pil3,$pil4,$pil5);
    if($survei == TRUE){
        header('location:../pertanyaan.php');
    } else {
      echo "data tidak berubah";
    }

?>
