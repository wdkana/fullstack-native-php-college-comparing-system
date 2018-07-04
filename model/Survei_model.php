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
	  
	  //function menampilkan data kampus berdasarkan id
	  public function kampus($id){
          $sql = "SELECT * FROM tbl_kampus where id=$id";
          $query = mysql_query($sql);
		  $row = mysql_fetch_array($query);
          return $row;
      }
	  
	  //function menampilkan semua data kampus berdasarkan id
	  public function ambilkampus2($id){
          $sql = "SELECT * FROM tbl_kampus where id='$id'";
          $query = mysql_query($sql);
          return $query;
	  }
	  
	  //function menambahkan pertanyaan
      public function addPertanyaan($pertanyaan, $pil1, $pil2, $pil3, $pil4, $pil5){

          $sql = "INSERT INTO `tbl_pertanyaan`
          VALUES (NULL, '$pertanyaan', '$pil1', '$pil2', '$pil3', '$pil4', '$pil5');";
          $query = mysql_query($sql);
          return $query;
      }	  
	  
	  //function untuk hapus pertanyaan
      public function deletePertanyaan($id){

        $sql = "DELETE FROM tbl_pertanyaan WHERE id = '$id'";
        $query = mysql_query($sql);
        return $query;
      }
	  
	  //function untuk merubah pertanyaan
	  public function editPertanyaan($id,$pertanyaan, $pil1, $pil2,$pil3,$pil4,$pil5){
	  $sql = "UPDATE `tbl_pertanyaan` SET 
	  `pertanyaan` = '$pertanyaan', 
	  `pil1` = '$pil1', 
	  `pil2` = '$pil2', 
	  `pil3` = '$pil3', 
	  `pil4` = '$pil4', 
	  `pil5` = '$pil5'
	   WHERE `id` = $id";
      $query = mysql_query($sql);
      return $query;
	  }
	  
      //function untuk menampilkan pertanyaan berdasarkan id
      public function pertanyaanId($id){
          $sql = "SELECT * FROM tbl_pertanyaan where id=$id";
          $query = mysql_query($sql);
 		  $row = mysql_fetch_array($query);
          return $row;
      }	  
    }

?>
