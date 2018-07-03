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

      //function untuk memunculkan akreditasi di perbandingan berdasarkan nama kampus
      public function viewAkreditasi($kampus){
          $sql = "SELECT * FROM tbl_akreditasi WHERE nama_kampus = '$kampus'";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk validasi fakultas yang sudah di akreditasi berdasarkan fakultas
      public function checkFakultas($fakultas){

          $sql = "SELECT * FROM tbl_akreditasi WHERE fakultas = '$fakultas'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk hapus Akreditasi
      public function deleteAkreditasi($id){

        $sql = "DELETE FROM tbl_akreditasi WHERE id = '$id'";
        $query = mysql_query($sql);
        return $query;
      }

      //function untuk menampilkan semua Akreditasi
      public function detailAkreditasi(){

        $sql = "SELECT * FROM tbl_akreditasi";
        $query = mysql_query($sql);
        return $query;

      }

      //function untuk edit akreditasi
      public function editAkreditasi($id,$fakultas,$akreditasi){

          $sql = "UPDATE tbl_akreditasi SET
          fakultas = '$fakultas',
          akreditasi = '$akreditasi' WHERE
          id = '$id'";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk menampilkan akreditasi beubahAkreditasiProcess.phprdasarkan id
      public function getId($id){
          $sql = "SELECT * FROM tbl_akreditasi WHERE id = '$id'";
          $query = mysql_query($sql);
          return $query;
      }


    }


?>
