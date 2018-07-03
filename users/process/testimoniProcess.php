<?php
    include "../../model/Testimoni_model.php";
    include "../../model/User_model.php";

    $test = new Testimoni_model();
    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];


    $row = mysql_fetch_array($user->kampus($username));

    $nama_kampus = $row['asal_kampus'];
    $testimoni = $_POST['testimoni'];

    $test->insertTestimoni($username,$nama_kampus,$testimoni);
    if($test == TRUE){
      header('location: ../dashboard.php');
    } else {
        echo "data gagal disimpan";
    }



?>
