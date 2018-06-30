<?php

    include "Database_Connection.php";
    /**
     *
     */
    class Banding_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk banding kampus
      public function Kampus($kampus){
          $sql = "SELECT tbl_kampus.id, tbl_kampus.nama_kampus,
                  AVG(tbl_nilai.dosen) AS dosen,
                  AVG(tbl_nilai.biaya) AS biaya,
                  AVG(tbl_nilai.jurusan) AS jurusan,
                  AVG(tbl_nilai.lingkungan) AS lingkungan,
                  AVG(tbl_nilai.prestasi) AS prestasi,
                  AVG(tbl_nilai.mata_kuliah) AS mata_kuliah
                  FROM tbl_kampus join tbl_nilai on tbl_kampus.id = tbl_nilai.id_kampus WHERE nama_kampus = '$kampus'";
          $query = mysql_query($sql);
		      $row = mysql_fetch_array($query);
          return $row;
      }


    }

?>
