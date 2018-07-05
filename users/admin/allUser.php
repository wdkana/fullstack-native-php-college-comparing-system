<?php
    include "../../model/Profil_model.php";
    $profil = new Profil_model();
	
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
  <a href="dashboard-admin.php">Back</a>
      <form action="process/userProcess.php" method="post" enctype="multipart/form-data">
          <label>Username</label>
		  <input type="text" name="username" required placeholder="username"><br>         
		  <label>Password</label>
		  <input type="password" name="password" required placeholder="password"><br>
		  <label>Email</label>		  
		  <input type="email" name="email" required placeholder="email"><br>
		  <label>NIM</label>
          <input type="text" name="nim" required placeholder="nim"><br>                  
		  <label>Asal Kampus</label>
		  <input type="text" name="asal_kampus" required placeholder="asal kampus"><br>
		  <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" required placeholder="nama lengkap"><br>  	<label>Kelas</label>
          <input type="text" name="kelas" required placeholder="kelas"><br>     <label>Fakultas</label>
		  <input type="text" name="fakultas" required placeholder="fakultas"><br>
		  <label>No HP</label>
          <input type="text" name="no_hp" required placeholder="no hp"><br>          
		  <label>Foto KTM</label>
		  <br><input type="file" name="foto_ktm"><br>
		  <label>Instagram</label>
          <input type="text" name="instagram" required placeholder="instagram"><br>		  
		  <label>Facebook</label>
          <input type="text" name="facebook" required placeholder="facebook"><br>
		  <label>Twitter</label>
          <input type="text" name="twitter" required placeholder="twitter"><br>
		  <label>Status</label>
          <input type="text" name="status" required placeholder="status"><br>		  
		  <label>Status Kerja</label>
          <input type="text" name="status_kerja" required placeholder="status kerja"><br>
          <input type="submit" name="simpan" value="simpan">
      </form>  

      <h1>Daftar Mahasiswa</h1>
      <table border="1">
        <thead>
            <tr>
			  <th>No</th>
              <th>NIM</th>
              <th>Nama Lengkap</th>
              <th>Asal Kampus</th>
              <th>Fakultas</th>
              <th>No Telp</th>
              <th>Instagram</th>
              <th>Facebook</th>
              <th>Twitter</th>
              <th>Status</th>
              <th>Status Kerja</th>
			  <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              $result = $profil->viewAll();
              while($row = mysql_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['nama_lengkap'];?></td>
            <td><?php echo $row['asal_kampus'];?></td>
            <td><?php echo $row['fakultas'];?></td>
            <td><?php echo $row['no_hp'];?></td>
            <td><?php echo $row['instagram'];?></td>
            <td><?php echo $row['facebook'];?></td>
            <td><?php echo $row['twitter'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['status_kerja'];?></td>
            <td>
			<a href="edit_user.php?id=<?php echo $row['id'];?>">Edit</a>
			<button onclick="hapus('<?php echo $row['username'];?>')">Hapus</button></td>
          </tr>
          <?php
              $no++;
              }
          ?>
        </tbody>
      </table>
      <script>
          function hapus(username) {
              var r = confirm("Apakah anda akan menghapus data ini?");
              if (r == true) {
                  window.location.href="process/deleteUserProcess.php?i="+username;
              } else {
                  window.location.href="allUser.php";
              }
          }

      </script>  
  </body>
</html>


