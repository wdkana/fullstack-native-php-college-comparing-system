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

    $result = $testimoni->getTestimoni($username);
    $row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Testimoni</title>
</head>
<body>
  <a href="dashboard.php">kembali</a><br>
  <a href="addTestimoni.php">isi testimoni</a>
            <h1>data testimoni</h1>
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
          <td><button onclick="hapus(<?php echo $row['id'];?>)">Hapus</button>
            <a href="editTestimoni.php?i=<?php echo $row['id'];?>">Ubah</a></td>
        </tr>
      </tbody>
    </table>
</body>
</html>