<?php

	include_once "Database_Connection.php";

	/**
	* 
	*/
	class Nilai_model{
		
		function __construct()
		{
			$connection = new Database_Connection();
		}

		public function viewNilai(){

			$sql = "SELECT * FROM tbl_nilai";
			$query = mysql_query($sql);
			return $query;
		}
	}
?>