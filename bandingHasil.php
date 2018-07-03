<?php
    include "model/Banding_model.php";
    include "model/Akreditasi_model.php";

    $akreditasi = new Akreditasi_model();
    $banding = new Banding_model();

    $kampus1 = $_POST['kampus1'];
	  $row1 = $banding->Kampus($kampus1);
    $result1 = $akreditasi->viewAkreditasi($kampus1);

    $kampus2 = $_POST['kampus2'];
	  $row2 = $banding->Kampus($kampus2);
    $result2 = $akreditasi->viewAkreditasi($kampus2);
    $total1=$row1['dosen']+$row1['jurusan']+$row1['lingkungan']+$row1['prestasi']+$row1['mata_kuliah']+$row1['biaya'];
    $total2= $row2['dosen']+$row2['jurusan']+$row2['lingkungan']+$row2['prestasi']+$row2['mata_kuliah']+$row2['biaya'];
?>
<html>
<head>
  <title>Hasil Perbandingan</title>
</head>

	<table border=1>
		  <tr>
			<th>Kampus <?php echo $row1['nama_kampus']?></th>
			<th>Kampus <?php echo $row2['nama_kampus']?></th>
		  </tr>
		  <tr>
			<td>Dosen : <?php echo $row1['dosen']?></td>
			<td>Dosen : <?php echo $row2['dosen']?></td>
		  </tr>
		  <tr>
			<td>Jurusan : <?php echo $row1['jurusan']?></td>
			<td>Jurusan : <?php echo $row2['jurusan']?></td>
		  </tr>
		  <tr>
			<td>Lingkungan : <?php echo $row1['lingkungan']?></td>
			<td>Lingkungan : <?php echo $row2['lingkungan']?></td>
		  </tr>
		  <tr>
			<td>Prestasi : <?php echo $row1['prestasi']?></td>
			<td>Prestasi : <?php echo $row2['prestasi']?></td>
		  </tr>
		  <tr>
			<td>Mata Kuliah : <?php echo $row1['mata_kuliah']?></td>
			<td>Mata Kuliah : <?php echo $row2['mata_kuliah']?></td>
		  </tr>
      <tr>
     <td>Biaya : <?php echo $row1['biaya']?></td>
     <td>Biaya : <?php echo $row2['biaya']?></td>
      </tr>
      <tr>
			<td>TOTAL NILAI : <?php echo $total1?> <br>
      <?php while($row = mysql_fetch_array($result1)){?>
        AKREDITASI JURUSAN: <?php echo $row['fakultas'];?> - <?php echo $row['akreditasi'];?><br>

      <?php }?>
      </td>
			<td>TOTAL NILAI : <?php echo $total2?><br>
      <?php while($row = mysql_fetch_array($result2)){?>
        AKREDITASI JURUSAN: <?php echo $row['fakultas'];?> - <?php echo $row['akreditasi'];?><br>
      <?php }?>
    </td>
		  </tr>
		</table>


</html>
