<?php
    include "../../model/Testimoni_model.php";
    include "../../model/User_model.php";

    $test = new Testimoni_model();
    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];

    $result = $user->kampus($username);
    $row = mysql_fetch_array($result);

    $nama_kampus = $row['nama_kampus'];
    $testimoni = $_POST['testimoni'];

    $test->insertTestimoni($username,$nama_kampus,$testimoni);
    if($test == TRUE){
        header('location: ../dashboard.php');
    } else {
        echo "data gagal disimpan";
    }



?>
