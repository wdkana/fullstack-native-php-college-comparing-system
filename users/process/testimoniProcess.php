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
    $nama_lengkap = $row['nama_lengkap'];

    $test->insertTestimoni($username,$nama_lengkap,$nama_kampus,$testimoni);
    if($test == TRUE){
      header('location: ../testimoni.php');
    } else {
        echo "data gagal disimpan";
    }



?>
