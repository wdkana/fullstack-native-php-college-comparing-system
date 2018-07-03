<?php
    include "../model/Survei_model.php";
    $survei = new Survei_model();

?>
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
          <textarea name="slogan" rows="8" cols="80"></textarea><br>
          <input type="submit" name="simpan" value="simpan">
      </form>
      <hr>
      <h1>Daftar Kampus</h1>
      <table border="1">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama Kampus</th>
              <th>Alamat</th>
              <th>Foto</th>
              <th>Slogan</th>
              <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              $result = $survei->ambilkampus();
              while($row = mysql_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nama_kampus'];?></td>
            <td><?php echo $row['alamat'];?></td>
            <td><img src="../assets/images/<?php echo $row['foto'];?>" width="80" height="80"></td>
            <td><?php echo $row['slogan'];?></td>
            <td><a href="#">edit</a>
                <button onclick="hapus(<?php echo $row['id'];?>)">Hapus</button></td>
          </tr>
          <?php
              $no++;
              }
          ?>
        </tbody>
      </table>
      <script>
          function hapus(id) {
              var r = confirm("Apakah anda akan menghapus data ini?");
              if (r == true) {
                  window.location.href="process/deleteKampusProcess.php?i="+id;
              } else {
                  window.location.href="kampus.php";
              }
          }
      </script>
  </body>
</html>
