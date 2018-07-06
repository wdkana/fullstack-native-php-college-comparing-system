<?php
    include "../../model/Survei_model.php";
	include "../../model/Profil_model.php";
	
    $survei = new Survei_model();
	$profil = new Profil_model();
    session_start();
	$id = $_GET['id'];
    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

	$row = $profil->viewAll2($id);
    if(!isset($username)){
        header('location: ../../');
    }
    if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
 <a href="kampus.php">Pertanyaan</a>
      <form action="process/ubahUserProcess.php" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="id" value="<?php echo $id ?>">
		  <input type="hidden" name="username" value="<?php echo $row['username'] ?>">
		  <label>Email</label>		  
		  <input type="email" name="email" required placeholder="email" value="<?php echo $row['email'] ?>"><br>
		  <label>NIM</label>
          <input type="text" name="nim" required placeholder="nim" value="<?php echo $row['nim'] ?>"><br>                  
		  <label>Asal Kampus</label>
		  <input type="text" name="asal_kampus" required placeholder="asal kampus" value="<?php echo $row['asal_kampus'] ?>"><br>
		  <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" required placeholder="nama lengkap" value="<?php echo $row['nama_lengkap'] ?>"><br>  	<label>Kelas</label>
          <input type="text" name="kelas" required placeholder="kelas" value="<?php echo $row['kelas'] ?>"><br>     
		  <label>Fakultas</label>
		  <input type="text" name="fakultas" required placeholder="fakultas" value="<?php echo $row['fakultas'] ?>"><br>
		  <label>No HP</label>
          <input type="text" name="no_hp" required placeholder="no hp" value="<?php echo $row['no_hp'] ?>"><br>          
		  <label>Foto KTM</label>
		  <br><input type="file" name="foto_ktm"><br>
		  <label>Instagram</label>
          <input type="text" name="instagram" required placeholder="instagram" value="<?php echo $row['instagram'] ?>"><br>		  
		  <label>Facebook</label>
          <input type="text" name="facebook" required placeholder="facebook" value="<?php echo $row['facebook'] ?>"><br>
		  <label>Twitter</label>
          <input type="text" name="twitter" required placeholder="twitter" value="<?php echo $row['twitter'] ?>"><br>
		  <label>Status</label>
          <input type="text" name="status" required placeholder="status" value="<?php echo $row['status'] ?>"><br>		  
		  <label>Status Kerja</label>
          <input type="text" name="status_kerja" required placeholder="status kerja" value="<?php echo $row['status_kerja'] ?>"><br>
          <input type="submit" name="simpan" value="simpan">
      </form>  
</body>
</html>
