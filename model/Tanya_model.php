<?php
    include_once "Database_Connection.php";

    /**
     *
     */
    class Tanya_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk membuat pertanyaan

      public function addPertanyaan($email, $nama_kampus, $pertanyaan){
		$tgl = date('Y-m-d');
        $sql = "INSERT INTO `tbl_tanya_kampus` 
        VALUES (NULL, '$email', '$pertanyaan', '$nama_kampus', '$tgl')";
        $query = mysql_query($sql);
        return $query;
      }      
	  
	  //function untuk menjawab pertanyaan
	  public function addJawaban($id,$username,$jawaban){
		$tgl = date('Y-m-d');
        $sql = "INSERT INTO `tbl_jawab_kampus` VALUES (NULL, '$id', '$username', '$jawaban', '$tgl');";
        $query = mysql_query($sql);
        return $query;
      }
	  
	  public function lihatPertanyaan($username){
		$sql = "SELECT * , tbl_tanya_kampus.id as i FROM `tbl_tanya_kampus` JOIN tbl_detail_profil on tbl_tanya_kampus.nama_kampus=tbl_detail_profil.asal_kampus WHERE tbl_detail_profil.username = '$username'";
		$query = mysql_query($sql);
		return $query;
	  }
	  
	  public function lihatPertanyaanJawab($id){
		$sql = "SELECT * FROM `tbl_tanya_kampus` Where tbl_tanya_kampus.id = '$id'";
        $query = mysql_query($sql);
		$row = mysql_fetch_array($query);
        return $row;
	  }

    }

?>
