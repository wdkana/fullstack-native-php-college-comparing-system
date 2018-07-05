<?php
	include_once("../../model/User_model.php");
	$user = new User_model();

	$email = $_GET['email'];

	$user->verify_email($email);
	header('location: ../../');


?>
