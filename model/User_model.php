<?php

    include_once "Database_Connection.php";

    /**
     *
     */
    class User_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk register
      public function register($username, $email, $password){

          $sql = "INSERT INTO `tbl_register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk check username
      public function checkUser($username, $email){

          $sql = "SELECT * FROM tbl_register WHERE username = '$username' OR email = '$email'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;

      }

      //function untuk login username
      public function loginUser($username, $password){

          $sql = "SELECT * FROM tbl_register WHERE username = '$username' AND password = '$password'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk check user detail
      public function detailProfil($username){

          $sql = "SELECT * FROM tbl_detail_profil WHERE username = '$username'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }

      //function untuk insert detail profil
      public function setProfil($username, $nim, $asal_kampus, $nama_lengkap, $fakultas, $kelas, $no_hp, $foto_ktm){

          $sql = "INSERT INTO `tbl_detail_profil` (`id`, `username`, `nim`, `asal_kampus`,`nama_lengkap`, `fakultas`, `kelas`, `no_hp`, `foto_ktm`) VALUES
          (NULL, '$username', '$nim', '$asal_kampus','$nama_lengkap', '$fakultas', '$kelas', '$no_hp', '$foto_ktm');";
          $query = mysql_query($sql);
          return $query;

      }

      //function untuk menampilkan nama Kampus
      public function kampus($username){

        $sql = "SELECT * FROM tbl_detail_profil WHERE username = '$username'";
        $query = mysql_query($sql);
        return $query;
      }





    }

?>
