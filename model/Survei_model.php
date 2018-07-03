<?php

    include_once "Database_Connection.php";
    /**
     *
     */
    class Survei_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk menampilkan pertanyaan
      public function pertanyaan(){
          $sql = "SELECT * FROM tbl_pertanyaan";
          $query = mysql_query($sql);
          return $query;
      }

	  //function menampilkan semua data kampus
	  public function ambilkampus(){
          $sql = "SELECT * FROM tbl_kampus";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk input nilai survei
      public function inputNilai($kampus, $username, $dosen, $jurusan, $lingkungan, $prestasi, $mata_kuliah, $biaya){

          $sql = "INSERT INTO `tbl_nilai` (`id`, `id_kampus`, `username`, `dosen`, `jurusan`, `lingkungan`, `prestasi`, `mata_kuliah`, `biaya`)
          VALUES (NULL, '$kampus', '$username', '$dosen', '$jurusan', '$lingkungan', '$prestasi', '$mata_kuliah ', '$biaya');";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk validasi username yang sudah survei agar tidak bisa input lagi
      public function viewUser($username, $id_kampus){

          $sql = "SELECT * FROM tbl_nilai WHERE username = '$username' AND id_kampus = '$id_kampus'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }
    }

?>
