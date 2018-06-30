<?php

    include_once "Database_Connection.php";

    /**
     *
     */
    class Akreditasi_model{

      function __construct(){
        $connection = new Database_Connection();
      }
      //function untuk add akreditasi
      public function addAkreditasi($nama_kampus, $fakultas, $akreditasi){
          $sql = "INSERT INTO tbl_akreditasi VALUES (NULL,'$nama_kampus','$fakultas','$akreditasi')";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk memunculkan akreditasi berdasarkan nama kampusProcess
      public function viewAkreditasi($kampus){
          $sql = "SELECT * FROM tbl_akreditasi WHERE nama_kampus = '$kampus'";
          $query = mysql_query($sql);
          return $query;
      }
    }


?>
