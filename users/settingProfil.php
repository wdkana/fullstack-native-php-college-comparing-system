<?php
    include "../model/User_model.php";
    $user = new User_model();

    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location:login.php');
    }
    $row = mysql_fetch_array($user->kampus($username));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setting Profil</title>
  </head>
  <body>
      <form action="process/saveSettingProfilProcess.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo  $row['id'];?>" hidden>
        nim
        <input type="number" name="nim" value="<?php echo $row['nim'];?>"><br>
        asal kampus
        <input type="text" name="asal_kampus" value="<?php echo $row['asal_kampus'];?>"><br>
        nama lengkap
        <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>"><br>
        jurusan
        <input type="text" name="fakultas" value="<?php echo $row['fakultas'];?>"><br>
        kelas
        <input type="text" name="kelas" value="<?php echo $row['kelas'];?>"><br>
        no hp
        <input type="number" name="no_hp" value="<?php echo $row['no_hp'];?>"><br>
        foto ktm
        <input type="file" name="foto_ktm" value="<?php echo $row['foto_ktm'];?>" required><br>
        <hr>
        media sosial <br>
        instagram
        <input type="text" name="instagram" value="<?php echo $row['instagram'];?>"><br>
        facebook
        <input type="text" name="facebook" value="<?php echo $row['facebook'];?>"><br>
        Twitter
        <input type="text" name="twitter" value="<?php echo $row['twitter'];?>"><br>
        status
        <input value="mahasiswa" type="radio" name="status" onClick="displayForm(this)"<?php if($row['status'] == 'mahasiswa'){echo "checked"; }?>>Mahasiswa</input>
				<input value="alumni" type="radio" name="status" onClick="displayForm(this)"<?php if($row['status'] == 'alumni'){ echo "checked"; }?>>Alumni</input>
        <div style="visibility:hidden; position:relative" id="pekerjaan">
    			<select name="status_kerja">
    				<option value="tidak bekerja" selected>Tidak Bekerja</option>
    				<option value="bekerja">Bekerja</option>
    			</select>
    		</div>
        <input type="submit" value="simpan" name="simpan">
        <a href="dashboard.php">batal</a>
      </form>
  </body>

</html>
<script type="text/javascript">
    function displayForm(c) {
        if (c.value == "mahasiswa") {
            document.getElementById("pekerjaan").style.visibility = 'hidden';
        } else if (c.value == "alumni") {
            document.getElementById("pekerjaan").style.visibility = 'visible';
        }
  }

</script>
