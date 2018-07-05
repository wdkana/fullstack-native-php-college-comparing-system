<?php
	session_start();

	$username = $_SESSION['username'];
	$email = $_GET['email'];
	if(isset($username)){
			header('location:dashboard.php');
	} else if(!$email){
			header('location:../');
	}
?>
<html>
<head>

</head>

<body>
	<p>Ganti Password</p>
	<form action="process/gantipassProcess.php" method="post">
		<input type="password" name="old">Password Lama</input>
		<br/>
		<input type="password" name="new">Password Baru</input>
		<br />
		<input type="password" name="newconfirm">Konfirmasi Password Baru</input>
		<input type="hidden" name="email" value="<?php echo $email ?>"></input>
		<input type="submit" name="simpan" value="simpan">

	</form>

</body>
</html>
