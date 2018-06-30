<?php
    include "Database_Connection.php";

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
      public function addKampus($nama_kampus, $alamat, $foto, $slogan){
        $sql = "INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`)
        VALUES (NULL, '$nama_kampus', '$alamat', '$foto', '$slogan');";
        $query = mysql_query($sql);
        return $query;

      }

    }


 ?>
