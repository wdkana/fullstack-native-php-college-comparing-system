<?php
    include "../model/User_model.php";
    session_start();

    $user = new User_model();
    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];
    
    if(!isset($username)){
        header('location:../login.php');
    }
    if($hak_akses == 'admin'){
      header('location:admin/dashboard-admin.php');
    }
    $row = mysql_fetch_array($user->kampus($username));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Profil</title>
  </head>
  <body>
      <a href="dashboard.php">Kembali</a>
      <h1>DETAIL PROFIL</h1>

      <img src="../assets/images/<?php echo $row['foto_ktm'];?>" width="500" height="500">
      <p>Username : <?php echo $row['username'];?></p>
      <p>NIM : <?php echo $row['nim'];?></p>
      <p>Asal Kampus : <?php echo $row['asal_kampus']?></p>
      <p>Nama Lengkap : <?php echo $row['nama_lengkap'];?></p>
      <p>Jurusan : <?php echo $row['fakultas'];?></p>
      <p>Kelas : <?php echo $row['kelas'];?></p>
      <p>No Hp : <?php echo $row['no_hp'];?></p>
      <p>Status : <?php echo $row['status'];?></p>
      <p>Status Kerja : <?php echo $row['status_kerja'];?></p>
      <hr>
      <h1>Sosial Media</h1>
      <p>Instagram : <?php echo $row['instagram'];?></p>
      <p>Facebook : <?php echo $row['facebook'];?></p>
      <p>Twitter : <?php echo $row['twitter'];?></p>
      <a href="setting.php">Setting</a>
  </body>
</html>
