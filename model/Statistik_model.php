<?php

    include_once "Database_Connection.php";

    /**
     *
     */
    class Statistik_model{

		function __construct(){
			$connection = new Database_Connection();
		}
		//function untuk add akreditasi
		public function totalUlasan(){
			$sql = "SELECT Count(ulasan) as ulasan FROM tbl_ulasan";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$ulasan = $row['ulasan'];
			return $ulasan;
		}

		public function totalKampus(){
			$sql = "SELECT Count(nama_kampus) as kampus FROM tbl_kampus";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$kampus = $row['kampus'];
			return $kampus;
		}		
		
		public function totalPengguna(){
			$sql = "SELECT Count(username) as pengguna FROM tbl_detail_profil";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$pengguna = $row['pengguna'];
			return $pengguna;
		}		
		
		public function totalTestimoni(){
			$sql = "SELECT Count(testimoni) as testimoni FROM tbl_testimoni";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$testimoni = $row['testimoni'];
			return $testimoni;
		}		
		
		public function totalTanya(){
			$sql = "SELECT Count(testimoni) as testimoni FROM tbl_testimoni";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$testimoni = $row['testimoni'];
			return $testimoni;
		}		
		
		public function totalDaftar(){
			$sql = "SELECT Count(username) as daftar FROM tbl_register";
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$daftar = $row['daftar'];
			return $daftar;
		}
    }


?>
