<?php
    include "../../model/User_model.php";
    include "../../model/Kampus_model.php";
    include "../../model/Banding_model.php";
    include "../../model/Testimoni_model.php";

    $banding = new Banding_model();
    $user = new User_model();
    $kmp = new Kampus_model();
    $testimoni = new Testimoni_model();

    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: ../../');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Banding Kampus</title>
	<script type="text/javascript" src="../../assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<h3>banding kampus</h3>
	<?php //awal pembuatan alsa?>
	<a href="pertanyaan.php">Buat Pertanyaan</a><br>
  <a href="kampus.php">Kampus</a><br>
  <a href="allUser.php">User</a><br>

	<?php //akhir pembuatan alsa?>

	<a href="../admin/dashboard-admin.php">Dashboard</a><br>
	<a href="../process/logoutProcess.php">Logout</a><br>
    <a href="setting.php">Setting</a><br>
	<a href="../users/ulasan.php" class="waves-effect waves-cyan">Ulasan</a>
	<br>
	<a href="../users/survei.php" class="waves-effect waves-cyan">Isi Survei</a>
	<br>
	<a href="testimoni.php">isi testimoni</a>
    <h3>User yang terdaftar saat ini sebanyak #<?php echo $user->User();?></h3><br>
    <h3>Kampus yang terdaftar saat ini sebanyak #<?php echo $kmp->Kampus();?></h3><br>
    <h3>User yang berstatus mahasiswa sebanyak #<?php echo $user->Student();?></h3><br>
    <h3>User yang berstatus alumni sebanyak #<?php echo $user->Alumni();?></h3><br>
    <h3>User Alumni yang sudah bekerja sebanyak #<?php echo $user->Work();?></h3><br>
    <h3>User Alumni yang belum bekerja sebanyak #<?php echo $user->notWork();?></h3><br>
    <h3>Ranking Kampus terbaik menurut penilaian User : </h3>
    <?php
        $no=1;
        $result = $banding->rankingKampus();
        while($row = mysql_fetch_array($result)){
    ?>
        <h4>Nama Kampus : <?php echo $no;?>. <?php echo $row['nama_kampus'];?></h4>
    <?php
        $no++;
        }
    ?>
    <h3>Jumlah user alumni yang sudah mengisi testimoni #<?php echo $testimoni->countTestimoni();?></h3>


</body>
</html>
