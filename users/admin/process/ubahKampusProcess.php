<?php
     include "../../../model/Kampus_model.php";

      $kampus = new Kampus_model();

      $nama_kampus = $_POST['nama_kampus'];
      $alamat = $_POST['alamat'];
      $slogan = $_POST['slogan'];
      $no_hp = $_POST['no_hp'];
      $fax = $_POST['fax'];
      $email = $_POST['email'];
      $instagram = $_POST['instagram'];
      $facebook = $_POST['facebook'];
      $twitter = $_POST['twitter'];
	  $id = $_POST['id'];
          if(isset($_POST['simpan'])){
            $foto = $_FILES['foto']['name'];
            $ukuran_file = $_FILES['foto']['size'];
            $tipe_file = $_FILES['foto']['type'];
            $tmp_file = $_FILES['foto']['tmp_name'];
            $path = "../../../assets/images/".$foto;

        			if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        				if($ukuran_file < 5044070){
        					     move_uploaded_file($tmp_file, $path);
        					     $kampus->ubahKampus($nama_kampus,$alamat, $foto, $slogan,$no_hp,$email,$fax,$instagram,$facebook,$twitter,$id);
                       header('location:../kampus.php');
        				}else{
        					echo 'UKURAN FILE TERLALU BESAR';
        				}
        			}else{
        				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        			}
        		}




?>