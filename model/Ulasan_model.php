<?php
    include_once "Database_Connection.php";

    /**
     *
     */
    class Ulasan_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk posting ulasan kampus

      public function addUlasan($username, $nama_kampus, $tanggal, $judul, $ulasan, $tag){

        $sql = "INSERT INTO `tbl_ulasan` (`id`, `username`, `nama_kampus`, `tanggal`, `judul`, `ulasan`, `tag`)
        VALUES (NULL, '$username', '$nama_kampus', '$tanggal', '$judul', '$ulasan', '$tag');";
        $query = mysql_query($sql);
        return $query;
      }

    }

?>
