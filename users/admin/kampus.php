<?php
    include "../../model/Survei_model.php";
    $survei = new Survei_model();
    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

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
  <a href="dashboard-admin.php">Back</a>
      <form action="process/kampusProcess.php" method="post" enctype="multipart/form-data">
          <input type="text" name="nama_kampus" required placeholder="nama_kampus"><br>
          <input type="text" name="alamat" required placeholder="alamat"><br>
          foto <br><input type="file" name="foto"><br>
          slogan <br>
          <textarea name="slogan" rows="8" cols="80"></textarea><br>
          no.hp<input type="number" name="no_hp" placeholder="no hp"><br>
          email<input type="email" name="email" placeholder="email"><br>
          fax<input type="text" name="fax" placeholder="fax"><br>
          instagram<input type="text" name="instagram" placeholder="instagram"><br>
          facebook<input type="text" name="facebook" placeholder="facebook"><br>
          twitter<input type="text" name="twitter" placeholder="twitter"><br>
          website resmi
          <input type="text" name="website" placeholder="website resmi"><br>
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
              <th>No Hp</th>
              <th>Email</th>
              <th>Fax</th>
              <th>instgram</th>
              <th>facebook</th>
              <th>Twitter</th>
              <th>Website</th>
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
            <td><img src="../../assets/images/<?php echo $row['foto'];?>" width="80" height="80"></td>
            <td><?php echo $row['slogan'];?></td>
            <td><?php echo $row['no_hp'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['fax'];?></td>
            <td><?php echo $row['instagram'];?></td>
            <td><?php echo $row['facebook'];?></td>
            <td><?php echo $row['twitter'];?></td>
            <td><?php echo $row['website'];?></td>
            <td>
			<a href="akreditasi.php?id=<?php echo $row['id'];?>">Akreditasi</a>
			<a href="fakultas.php?id=<?php echo $row['id'];?>">Fakultas</a>
			<a href="edit_kampus.php?id=<?php echo $row['id'];?>">Edit</a>
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
