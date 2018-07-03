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
      public function addKampus($nama_kampus,$alamat, $foto, $slogan,$no_hp,$email,$fax,$instagram,$facebook,$twitter){
        $sql = "INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`, `no_hp`, `email`, `fax`, `instagram`, `facebook`, `twitter`) VALUES
        (NULL, '$nama_kampus','$alamat','$foto','$slogan','$no_hp','$email','$fax','$instagram','$facebook','$twitter');";
        $query = mysql_query($sql);
        return $query;

      }

      //function untuk menampilkan nama kampus sesuai yang loginUser
      public function viewKampus($kampus){

        $sql = "SELECT * FROM tbl_kampus WHERE nama_kampus = '$kampus'";
        $query = mysql_query($sql);
        return $query;
      }

      //function untuk check validasi nama kampus
      public function checkKampus($nama_kampus){

        $sql = "SELECT * FROM tbl_kampus WHERE nama_kampus = '$nama_kampus'";
        $query = mysql_query($sql);
        $check = mysql_num_rows($query);
        return $check;
      }

      //function untuk menghapus kampus
      public function deleteKampus($id){

        $sql = "DELETE FROM tbl_kampus WHERE id = '$id'";
        $query = mysql_query($sql);
        return $query;
      }

      //function untuk menampilkan kampus berdasarkan id
      public function detailKampus($id){
          $sql = "SELECT * FROM tbl_kampus WHERE id = '$id'";
          $query = mysql_query($sql);
          return $query;
      }

    }


 ?>
