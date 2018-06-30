<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
      <form action="process/kampusProcess.php" method="post" enctype="multipart/form-data">
          <input type="text" name="nama_kampus" required placeholder="nama_kampus"><br>
          <input type="text" name="alamat" required placeholder="alamat"><br>
          foto <br><input type="file" name="foto"><br>
          slogan <br>
          <textarea name="slogan" rows="8" cols="80"></textarea>
          <input type="submit" name="simpan" value="simpan">
      </form>
  </body>
</html>
