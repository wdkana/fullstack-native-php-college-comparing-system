<?php
    include "../model/User_model.php";
    include "../model/Kampus_model.php";
    session_start();

    $user = new User_model();
    $kmp = new Kampus_model();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!$username){
        header('location:../');
    }
    if($user->detailProfil($username) == 0){
        header('location: setProfil.php');
    }
    if($hak_akses == 'admin'){
      header('location:admin/dashboard-admin.php');
    }

    $row = mysql_fetch_array($user->kampus($username));
    $kampus = $row['asal_kampus'];

    $row = mysql_fetch_array($kmp->viewKampus($kampus));
    $id = $row['id'];
    $nama_kampus = $row['nama_kampus'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Banding Kampus</title>
	<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

</head>
<body>
	<h1><a href="index.php">Banding Kampus</a></h1>
	<a href="process/logoutProcess.php">Logout</a>
	<a href="../users/dashboard.php"> Dashboard	</a>
	<a href="../users/survei.php">Survei</a>

      <?php
	  //koding validasi jika kampus yang dinilai tidak tersedia
          if($nama_kampus == ''){
              echo "maaf kampus anda belum tersedia";
          } else {

        ?>
		  <form action="process/ulasanProcess.php" method="post">
          <input type="text" name="nama_kampus" value="<?php echo $nama_kampus;?>" hidden>
          <input type="text" name="judul" placeholder="judul"><br>
					<textarea name="ulasan" id="editor1" rows="10" cols="80">

					</textarea>
					<script>
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace( 'editor1' );
					</script><br>
          <input type="text" name="tag" placeholder="tag"><br>
          <input type="submit" value="simpan">
				</form>
        <?php
            }
        ?>
</body>
</html>
