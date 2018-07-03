<?php
    include "../model/Survei_model.php";
    include "../model/Akreditasi_model.php";

    $survei = new Survei_model();
    $akr = new Akreditasi_model();

    $result = $survei->ambilkampus();
    $resultAkr = $akr->detailAkreditasi();
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
        <input type="text" name="fakultas" placeholder="jurusan"><br>
        <input type="text" name="akreditasi" placeholder="akreditasi"><br>
        <input type="submit" value="simpan">
    </form>
    <hr>
      <h1>Daftar Akreditasi Kampus</h1>
    <table border="1">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Kampus</th>
            <th>Jurusan</th>
            <th>Akreditasi</th>
            <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $no = 1;
            while($row = mysql_fetch_array($resultAkr)){
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nama_kampus'];?></td>
          <td><?php echo $row['fakultas'];?></td>
          <td><?php echo $row['akreditasi'];?></td>
          <td><a href="ubahAkreditasi.php?i=<?php echo $row['id'];?>">Ubah</a>
          <button onclick="hapus(<?php echo $row['id'];?>)">Hapus</button></td></td>
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
                window.location.href="process/deleteAkreditasiProcess.php?i="+id;
            } else {
                window.location.href="akreditasi.php";
            }
        }
    </script>
  </body>
</html>
