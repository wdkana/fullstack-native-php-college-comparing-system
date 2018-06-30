<?php
    include "../model/Survei_model.php";

    $survei = new Survei_model();
	$result = $survei->pertanyaan();

	$result2 = $survei->ambilkampus();

?>
<html>

<html>
<head>

</head>

<body>

	<form action="process/surveiProcess.php" method="post">
		<label>
		Pilih Kampus
		</label>
		<select  name="id">
		  <option></option>
		<?php
			while($row2 = mysql_fetch_array($result2)){
		?>
		  <option value="<?php echo $row2["id"]?>"><?php echo $row2["nama_kampus"]?></option>

			<?php } ?>
		</select>
		<table border=1>
			  <tr>
				<th>NO</th>
				<th>Pertanyaan</th>
				<th>Pil 1</th>
				<th>pil 2</th>
				<th>Pil 3</th>
				<th>Pil 4</th>
				<th>Pil 5</th>
			  </tr>
				<?php $i=1;
				while($row = mysql_fetch_array($result)){?>
				<tr>
					<td><?php echo $i ?>
					<td><?php echo $row["pertanyaan"] ?></td>
					<td><input type="radio" name="pilihan<?php echo $i ?>" value="100"> <?php echo $row["pil1"] ?></td>
					<td><input type="radio" name="pilihan<?php echo $i ?>" value="80"> <?php echo $row["pil2"] ?></td>
					<td><input type="radio" name="pilihan<?php echo $i ?>" value="60"> <?php echo $row["pil3"] ?></td>
					<td><input type="radio" name="pilihan<?php echo $i ?>" value="40"> <?php echo $row["pil4"] ?></td>
					<td><input type="radio" name="pilihan<?php echo $i ?>" value="20"> <?php echo $row["pil5"] ?></td>
				</tr>
				<?php $i++;} ?>

			</table>
		<input type="submit" value="survei"><br>
		</form>
    <a href="process/logoutProcess.php">Logout</a>
</body>

</html>
