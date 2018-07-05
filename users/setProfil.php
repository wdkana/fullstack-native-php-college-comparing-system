<?php
    include "../model/User_model.php";
    $user = new User_model();
    session_start();
    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];
    
    if(!$username){
        header('location: ../');
    }
    if($user->detailProfil($username) > 0){
        header('location: dashboard.php');
    } 
    if($hak_akses == 'admin'){
        header('location:admin/dashboard-admin.php');
    } 
?>
<!DOCTYPE html>
<html>
<head>
<title>Banding Kampus</title>

</head>
<body>

      <form action="process/setProfilProcess.php" method="post" enctype="multipart/form-data">

            <h4>Setting Profil</h4>

            <input name="nim" type="number">
            <label>NIM</label>
            <input name="asal_kampus" type="text">
            <label>Asal Kampus</label>
            <input name="nama_lengkap" type="text">
            <label>Nama Lengkap</label>

            <input name="fakultas" type="text">
            <label>Jurusan</label>
            <input name="kelas" type="text">
            <label>Kelas</label>

            <input name="no_hp" type="number">
            <label>No HP</label>

            <label>Foto KTM</label><br>
            <input name="foto_ktm" type="file">
          <input type="text" name="instagram" placeholder="instagram"><br>
          <input type="text" name="facebook" placeholder="facebook"><br>
          <input type="text" name="twitter" placeholder="twitter"><br>
				<input value="mahasiswa" type="radio" name="status" onClick="displayForm(this)">Mahasiswa</input>
				<input value="alumni" type="radio" name="status" onClick="displayForm(this)">Alumni</input>
		<div style="visibility:hidden; position:relative" id="pekerjaan">
			<select name="status_kerja">
				<option value="tidak bekerja" selected>Tidak Bekerja</option>
				<option value="bekerja">Bekerja</option>
			</select>
		</div>

            <input type="submit" name="simpan" value="Simpan"><br><br>
            <a href="process/logoutProcess.php">logout</a>

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
