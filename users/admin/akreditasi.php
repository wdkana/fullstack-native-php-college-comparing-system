<?php
    include "../../model/Survei_model.php";
    include "../../model/Akreditasi_model.php";

    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location: ../../');
    } 
    if($hak_akses == 'user'){
        header('location:../dashboard.php');
    } 
    
    $survei = new Survei_model();
    $akr = new Akreditasi_model();
	  $id = $_GET['id'];
    if(!$id){
        header('location:dashboard-admin.php');
    }
    $result = $survei->kampus($id);
	  $nama = $result['nama_kampus'];
    $resultAkr = $akr->detailAkreditasi2($nama);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Akreditasi</title>
  </head>
  <body>
	<h1>Kampus <?php echo $result['nama_kampus']?></h1><a href="kampus.php">Back</a>
    <form action="process/akreditasiProcess.php" method="post">
        <input name="nama_kampus" type="hidden" value="<?php echo $result['nama_kampus']?>"><br>
        <input name="id" type="hidden" value="<?php echo $id?>"><br>
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
          <td><a href="ubahAkreditasi.php?i=<?php echo $row['id']?>&id=<?php echo $id?>">Ubah</a>
          <button onclick="hapus(<?php echo $row['id']?>, <?php echo $id?>)">Hapus</button></td></td>
        </tr>
        <?php
            $no++;
          }
        ?>
      </tbody>
    </table>
    <script>
        function hapus(id, idk) {
            var r = confirm("Apakah anda akan menghapus data ini?");
            if (r == true) {
                window.location.href="process/deleteAkreditasiProcess.php?i="+id+"&id="+idk;
            } else {
                window.location.href="akreditasi.php";
            }
        }
    </script>
  </body>
</html>
