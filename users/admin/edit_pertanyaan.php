<?php
    include "../../model/Survei_model.php";

    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location: ../../');
    }
     if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }
	  $id = $_GET['id'];
    if(!$id){
        header('location:dashboard-admin.php');
    }
    $survei = new Survei_model();
	  $row = $survei->pertanyaanId($id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
 <a href="kampus.php">Pertanyaan</a>
 <form action="process/ubahPertanyaanProcess.php" method="post">

		  <input type="hidden" name="id" value="<?php echo $id?>">
		  <label>Pertanyaan</label>
          <input type="text" name="pertanyaan" required placeholder="Pertanyaan" value="<?php echo $row['pertanyaan'] ;?>"><br>
		  <label>Pilihan 1</label>
          <input type="text" name="pil1" required placeholder="Pilihan 1" value="<?php echo $row['pil1'] ;?>"><br>
		  <label>Pilihan 2</label>
          <input type="text" name="pil2" required placeholder="Pilihan 2" value="<?php echo $row['pil2'];?>"><br>
		  <label>Pilihan 3</label>
          <input type="text" name="pil3" required placeholder="Pilihan 3" value="<?php echo $row['pil3'] ;?>"><br>
		  <label>Pilihan 4</label>
          <input type="text" name="pil4" required placeholder="Pilihan 4" value="<?php echo $row['pil4'] ;?>"><br>
		  <label>Pilihan 5</label>
          <input type="text" name="pil5" required placeholder="Pilihan 5" value="<?php echo $row['pil5'] ;?>"><br>
          <input type="submit" name="simpan" value="simpan">
      </form>
</body>
</html>
