<?php
    include_once "Database_Connection.php";

    /**
     *
     */
    class Tanya_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk posting ulasan kampus

      public function addPertanyaan($email, $nama_kampus, $pertanyaan){
		$tgl = date('d-m-Y');
        $sql = "INSERT INTO `tbl_tanya_kampus` 
        VALUES (NULL, '$email', '$pertanyaan', '$nama_kampus', '$tgl')";
        $query = mysql_query($sql);
        return $query;
      }
	  
	  public function lihatPertanyaan($kampus){
		$sql = "SELECT * FROM `tbl_tanya_kampus` JOIN tbl_detail_profil on tbl_tanya_kampus.nama_kampus=tbl_detail_profil.asal_kampus WHERE tbl_detail_profil.username = '$username'"
	  }

    }

?>
