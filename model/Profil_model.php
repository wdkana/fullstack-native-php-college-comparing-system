<?php
  include_once "Database_Connection.php";

    /**
     *Copyright Banding Kampus
     */
    class Profil_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk menampilkan semua detail profil
      public function viewAll(){

        $sql = "SELECT * FROM tbl_detail_profil";
        $query = mysql_query($sql);
        return $query;
      }
	  
	  //function untuk menampilkan detail profil berdasarkan id
	  public function viewAll2($id){
		  $sql = "SELECT * FROM `tbl_detail_profil` JOIN tbl_register on tbl_detail_profil.username=tbl_register.username WHERE tbl_detail_profil.id = $id";
		  $query = mysql_query($sql);
		  $row = mysql_fetch_array($query);
          return $row;
	  }

	  //function untuk update detail profil
          public function updateProfil($id,$username, $email, $nim, $asal_kampus, $nama_lengkap, $fakultas, $kelas, $no_hp, $foto_ktm,$instagram,$facebook,$twitter, $status, $status_kerja){

              $sql = "UPDATE `tbl_detail_profil` SET  `nim` = '$nim', `asal_kampus` = '$asal_kampus', `nama_lengkap` = '$nama_lengkap', `fakultas` = '$fakultas', `kelas` = '$kelas', `no_hp` = '$no_hp', `foto_ktm` = '$foto_ktm', `instagram` = '$instagram', `facebook` = '$facebook', `twitter` = '$twitter', `status` = '$status', `status_kerja` = '$status_kerja' WHERE `tbl_detail_profil`.`id` = $id;";
              $query = mysql_query($sql);
			  $sql = "UPDATE `tbl_register` SET `email` = '$email' WHERE `tbl_register`.`username` = '$username';";
			  $query = mysql_query($sql);
              return $query;

          }
		  
      //function untuk menghapus mahasiswa
      public function deleteMahasiswa($username){
        $sql = "DELETE FROM tbl_detail_profil WHERE username = '$username'";
		$query = mysql_query($sql);
        $sql = "DELETE FROM tbl_register WHERE username = '$username'";
        $query = mysql_query($sql);
        return $query;
      }
    }

?>
