<?php

    include "Database_Connection.php";
    /**
     *
     */
    class Banding_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk banding kampus
      public function Kampus($kampus){
          $sql = "SELECT * FROM tbl_kampus join tbl_nilai on tbl_kampus.id = tbl_nilai.id_kampus WHERE nama_kampus = '$kampus'";
          $query = mysql_query($sql);
		  $row = mysql_fetch_array($query);
          return $row;
      }
    }

?>
