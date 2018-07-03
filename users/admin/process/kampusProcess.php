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

          if(isset($_POST['simpan'])){
            $foto = $_FILES['foto']['name'];
            $ukuran_file = $_FILES['foto']['size'];
            $tipe_file = $_FILES['foto']['type'];
            $tmp_file = $_FILES['foto']['tmp_name'];
            $path = "../../../assets/images/".$foto;

        			if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        				if($ukuran_file < 5044070){
                  if($kampus->checkKampus($nama_kampus) > 0){
                      echo "<script>window.alert('Maaf, nama kampus sudah ada!');
                            window.location.href='../kampus.php';</script>";
                  }
        					     move_uploaded_file($tmp_file, $path);
        					     $kampus->addKampus($nama_kampus,$alamat, $foto, $slogan,$no_hp,$email,$fax,$instagram,$facebook,$twitter);
                       header('location:../kampus.php');
        				}else{
        					echo 'UKURAN FILE TERLALU BESAR';
        				}
        			}else{
        				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        			}
        		}



?>
