<?php
    include "../model/Banding_model.php";

    $banding = new Banding_model();

    $kampus1 = $_POST['kampus1'];
	$row1 = $banding->Kampus($kampus1);


    $kampus2 = $_POST['kampus2'];
	$row2 = $banding->Kampus($kampus2);

	$total1=$row1['akreditasi']+$row1['dosen']+$row1['jurusan']+$row1['lingkungan']+$row1['prestasi']+$row1['mata_kuliah']+$row1['biaya'];
	$total2=$row2['akreditasi']+$row2['dosen']+$row2['jurusan']+$row2['lingkungan']+$row2['prestasi']+$row2['mata_kuliah']+$row2['biaya'];
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
			<td>Akreditasi : <?php echo $row1['akreditasi']?></td>
			<td>Akreditasi : <?php echo $row2['akreditasi']?></td>
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
			<td>TOTAL NILAI : <?php echo $total1?></td>
			<td>TOTAL NILAI : <?php echo $total2?></td>
		  </tr>
		</table>


</html>
