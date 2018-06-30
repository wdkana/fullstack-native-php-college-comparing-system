<?php
    include "../model/Survei_model.php";

    $survei = new Survei_model();
    $result = $survei->ambilkampus();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Akreditasi</title>
  </head>
  <body>
    <form action="process/akreditasiProcess.php" method="post">
      nama kampus
        <select name="nama_kampus">
            <?php while($row = mysql_fetch_array($result)){?>?>
            <option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
          <?php }?>
        </select><br>
        <input type="text" name="fakultas" placeholder="fakultas"><br>
        <input type="text" name="akreditasi" placeholder="akreditasi"><br>
        <input type="submit" value="simpan">
    </form>
  </body>
</html>
