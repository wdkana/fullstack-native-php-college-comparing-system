<?php
    include "../../model/User_model.php";

    session_start();
    $username = $_SESSION['username'];

    $user = new User_model();

    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $fakultas = $_POST['fakultas'];
    $kelas = $_POST['kelas'];
    $no_hp = $_POST['no_hp'];
    $asal_kampus = $_POST['asal_kampus'];
	$status = $_POST['status'];
	$status_kerja = $_POST['status_kerja'];
	
    if(isset($_POST['simpan'])){
        $foto_ktm = $_FILES['foto_ktm']['name'];
        $ukuran_file = $_FILES['foto_ktm']['size'];
        $tipe_file = $_FILES['foto_ktm']['type'];
        $tmp_file = $_FILES['foto_ktm']['tmp_name'];
        $path = "../../assets/images/".$foto_ktm;

  			if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  				if($ukuran_file < 5044070){
  					move_uploaded_file($tmp_file, $path);
  					$user->setProfil($username, $nim, $asal_kampus, $nama_lengkap, $fakultas, $kelas, $no_hp, $foto_ktm, $status, $status_kerja);
  					if($user == TRUE){
                header('location:../dashboard.php');
  					}else{
  						echo 'GAGAL MENGUPLOAD GAMBAR';
  					}
  				}else{
  					echo 'UKURAN FILE TERLALU BESAR';
  				}
  			}else{
  				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  			}
  		}
?>
