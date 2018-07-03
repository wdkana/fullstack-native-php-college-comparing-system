<?php
    include "../../model/User_model.php";

    $user = new User_model();
    session_start();

    $username = $_SESSION['username'];
    if(!$username){
        header('location: login.php');
    }
    if($user->detailProfil($username) == 0){
        header('location: setProfil.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Banding Kampus</title>
	<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

</head>
<body>
	<h1>banding kampus</h1>
	<?php //awal pembuatan alsa?>
	<a href="kampus.php">Akreditasi</a>
	
	
	
	
	
	
	
	
	
	<?php //akhir pembuatan alsa?>
	<br><br><br><br><br>
	
	<a href="../admin/dashboard-admin.php">Dashboard</a>
	<a href="../process/logoutProcess.php">Logout</a><br>
    <a href="setting.php">Setting</a><br>
    <a href="profil.php">Detail Profil</a><br>
	<br>
	<a href="../users/ulasan.php" class="waves-effect waves-cyan">Ulasan</a>
	<br>
	<a href="../users/survei.php" class="waves-effect waves-cyan">Isi Survei</a>
	<br>
	<a href="testimoni.php">isi testimoni</a>
		<form>
			<textarea name="editor1" id="editor1" rows="10" cols="80">This is my textarea to be replaced with CKEditor.
			</textarea>
			<script>
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace( 'editor1' );
			</script>
		</form>
</body>
</html>
