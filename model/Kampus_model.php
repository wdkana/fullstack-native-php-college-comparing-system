<?php
    include_once "Database_Connection.php";

    /**
     *
     */
    class Kampus_model
    {

      function __construct()
      {
        $connection = new Database_Connection();
      }

      //function untuk add kampus
      public function addKampus($nama_kampus,$alamat, $foto, $slogan){
        $sql = "INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`)
        VALUES (NULL, '$nama_kampus','$akreditasi', '$alamat', '$foto', '$slogan');";
        $query = mysql_query($sql);
        return $query;

      }

      //function untuk menampilkan nama kampus berdasarkan yang loginUser
      public function viewKampus($kampus){

        $sql = "SELECT * FROM tbl_kampus WHERE nama_kampus = '$kampus'";
        $query = mysql_query($sql);
        return $query;
      }
    }


 ?>
