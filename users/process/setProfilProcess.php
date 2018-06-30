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

    if(isset($_POST['simpan'])){
        $foto_ktm = $_FILES['foto_ktm']['name'];
        $ukuran_file = $_FILES['foto_ktm']['size'];
        $tipe_file = $_FILES['foto_ktm']['type'];
        $tmp_file = $_FILES['foto_ktm']['tmp_name'];
        $path = "../../assets/images/".$foto_ktm;

  			if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  				if($ukuran_file < 1044070){
  					move_uploaded_file($tmp_file, $path);
  					$test = $user->setProfil($username, $nim, $asal_kampus, $nama_lengkap, $fakultas, $kelas, $no_hp, $foto_ktm);
  					if($test){
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
