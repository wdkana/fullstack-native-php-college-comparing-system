<?php
	include_once "Database_Connection.php";

	/**
	* 
	*/
	class Fakultas_model{
		
		function __construct()
		{
			$connection = new Database_Connection();
		}

		public function insertFakultas($fakultas,$nama_kampus){

			$sql = "INSERT INTO `tbl_fakultas` (`id`, `fakultas`, `nama_kampus`) VALUES (NULL, '$fakultas', '$nama_kampus');";
			$query = mysql_query($sql);
			return $query;
		}

		public function viewFakultas(){

			$sql = "SELECT * FROM tbl_fakultas";
			$query = mysql_query($sql);
			return $query;
		}

		public function getFakultas($nama_kampus){

			$sql = "SELECT * FROM `tbl_fakultas` WHERE nama_kampus = '$nama_kampus'";
			$query = mysql_query($sql);
			return $query;
		}

		public function editFakultas($fakultas,$id){

			$sql = "UPDATE `tbl_fakultas` SET `fakultas` = '$fakultas' WHERE `tbl_fakultas`.`id` = '$id';";
			$query = mysql_query($sql);
			return $sql;

		}

		public function deleteFakultas($id){

			$sql = "DELETE FROM tbl_fakultas WHERE id = '$id'";
			$query = mysql_query($sql);
			return $sql;
		}

		public function getId($id){

			$sql = "SELECT * FROM tbl_fakultas WHERE id = '$id'";
			$query = mysql_query($sql);
			return $query;
		}

	}
?>