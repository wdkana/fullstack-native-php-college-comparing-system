<?php
    include "../model/Testimoni_model.php";
    $testimoni = new Testimoni_model();

    session_start();
    //session
    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location:../');
    }
    if($hak_akses == 'admin'){
        header('location:admin/dashboard-admin.php');
    } 
    $row = mysql_fetch_array($testimoni->getTestimoni($username));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Testimoni</title>
</head>
<body>
    <table border="1">
      <thead>
        <tr>
          <th>Testimoni</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $row['testimoni'];?></td>
          <td><a href="#">Hapus</a><a href="#">Ubah</a></td>
        </tr>
      </tbody>
    </table>
</body>
</html>