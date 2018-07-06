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

      //function untuk edit ulasan
      public function updateUlasan($judul,$ulasan,$tag,$id){

          $sql = "UPDATE tbl_ulasan SET judul = '$judul', ulasan = '$ulasan', tag = '$tag' WHERE id = '$id'";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk menghapus ulasan
      public function deleteUlasan($id){
          $sql = "DELETE FROM tbl_ulasan WHERE id = '$id'";
          $query = mysql_query($sql);
          return $query;
      }

      //fucntion untuk menampilkan semua ulasna

      public function viewUlasan(){

          $sql = "SELECT * FROM tbl_ulasan";
          $query = mysql_query($sql);
          return $query;

      }

      //function untuk mengambil data berdasarkan id
      public function editUlasan($id){
        $sql = "SELECT * FROM tbl_ulasan WHERE id = '$id'";
        $query = mysql_query($sql);
        return $query;
      }
    }

?>
