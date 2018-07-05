<?php
    include "../../model/Survei_model.php";
    include "../../model/Kampus_model.php";

    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: ../../');
    }

    $id = $_GET['id'];
    if(!$id){
        header('location:dashboard-admin.php');
    }
    $survei = new Survei_model();
	  $kampus = new Kampus_model();
	  $row = $kampus->detailKampus($id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
  <h1>Edit Kampus</h1> <a href="kampus.php">Back</a><br>
      <img src="../../assets/images/<?php echo $row['foto'];?>" width="400" heigh="400">
      <form action="process/ubahKampusProcess.php" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="id" value="<?php echo $id?>">
          <input type="text" name="nama_kampus" required placeholder="nama_kampus" value="<?php echo $row['nama_kampus']?>"><br>
          <input type="text" name="alamat" required placeholder="alamat" value="<?php echo $row['alamat']?>"><br>
          foto <br><input type="file" name="foto" required><br>
          slogan <br>
          <textarea name="slogan" rows="8" cols="80"><?php echo $row['slogan']?></textarea><br>
          no.hp<input type="number" name="no_hp" placeholder="no hp" value="<?php echo $row['no_hp']?>"><br>
          email<input type="email" name="email" placeholder="email" value="<?php echo $row['email']?>"><br>
          fax<input type="text" name="fax" placeholder="fax" value="<?php echo $row['fax']?>"><br>
          instagram<input type="text" name="instagram" placeholder="instagram" value="<?php echo $row['instagram']?>"><br>
          facebook<input type="text" name="facebook" placeholder="facebook" value="<?php echo $row['facebook']?>"><br>
          twitter<input type="text" name="twitter" placeholder="twitter" value="<?php echo $row['twitter']?>">
          <input type="text" name="website" placeholder="website" value="<?php echo $row['website'];?>">
          <input type="submit" name="simpan" value="simpan">
      </form>
</body>
</html>
