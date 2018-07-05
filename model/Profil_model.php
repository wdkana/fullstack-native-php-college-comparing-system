<?php
  include_once "Database_Connection.php";

    /**
     *Copyright Banding Kampus
     */
    class Profil_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

   
 
      //function untuk menampilkan nama Kampus
      public function viewAll(){

        $sql = "SELECT * FROM tbl_detail_profil";
        $query = mysql_query($sql);
        return $query;
      }

    }

?>
