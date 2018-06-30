<?php
      include "../../model/Kampus_model.php";

      $kampus = new Kampus_model();

      $nama_kampus = $_POST['nama_kampus'];
      $alamat = $_POST['alamat'];
      $slogan = $_POST['slogan'];

          if(isset($_POST['simpan'])){
              $foto = $_FILES['foto']['name'];
              $ukuran_file = $_FILES['foto']['size'];
              $tipe_file = $_FILES['foto']['type'];
              $tmp_file = $_FILES['foto']['tmp_name'];
              $path = "../../assets/images/".$foto;

        			if($tipe_file == "image/jpg" || $tipe_file == "image/png"){
        				if($ukuran_file < 1044070){
        					move_uploaded_file($tmp_file, $path);
        					$test = $kampus->addKampus($nama_kampus, $alamat, $foto, $slogan);
        					if($test){
                      echo "data berhasil disimpan";
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
