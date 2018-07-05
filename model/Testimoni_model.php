<?php

    include_once "Database_Connection.php";

    /**
     *
     */
    class Testimoni_model{

      function __construct(){
        $connection = new Database_Connection();
      }

      //function untuk insert ke tbl testimoni

      public function insertTestimoni($username,$nama_lengkap, $nama_kampus, $testimoni){

        $sql = "INSERT INTO `tbl_testimoni` (`id`, `username`,`nama_lengkap`,`nama_kampus`, `testimoni`) VALUES
        (NULL, '$username', '$nama_lengkap','$nama_kampus', '$testimoni');";
        $query = mysql_query($sql);
        return $query;

      }

      //function untuk validasi jika username sudah menginput
      public function checkTestimoni($username){

          $sql = "SELECT * FROM tbl_testimoni WHERE username = '$username'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk mengambil data testimoni
      public function viewTestimoni(){

        $sql = "SELECT * FROM tbl_testimoni ORDER BY RAND() LIMIT 6";
        $query = mysql_query($sql);
        return $query;
      }

      //function untuk menghitung jumlah user alumni yang sudah mengisi Testimoni
      public function countTestimoni(){

        $sql = "SELECT * FROM tbl_testimoni";
        $query = mysql_query($sql);
        $check = mysql_num_rows($query);
        return $check;
      }

      //function untuk menampilkan testimoni berdasarkan username
      public function getTestimoni($username){

          $sql = "SELECT * FROM tbl_testimoni WHERE username = '$username'";
          $query = mysql_query($sql);
          return $query;
      }
    }

?>
