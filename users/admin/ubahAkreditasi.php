<?php
    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: ../../');
    }

    include "../../model/Akreditasi_model.php";
    $akr = new Akreditasi_model();

    $id = $_GET['i'];
	  $idk = $_GET['id'];
    if(!$id && !$idk){
        header('location: dashboard-admin.php');
    }
    $result = $akr->getId($id);
    $row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ubah Akreditasi</title>
  </head>
  <body>
    <form action="process/ubahAkreditasiProcess.php" method="post">
	  <input type="hidden" name="idk" value="<?php echo$idk;?>">
      <input type="text" name="id" value="<?php echo $row['id'];?>"hidden>
      nama kampus
      <input type="text" name="nama_kampus" value="<?php echo $row['nama_kampus'];?>" readonly> <br>
      JURUSAN
      <input type="text" name="fakultas" value="<?php echo $row['fakultas'];?>"><br>
      akreditasi
      <input type="text" name="akreditasi" value="<?php echo $row['akreditasi'];?>"><br>
      <input type="submit" value="ubah">
    </form>
  </body>
</html>
