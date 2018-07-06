<?php 
	include "../model/Tanya_model.php";
	
	session_start();
	$username = $_SESSION['username'];
	$tanya = new Tanya_model();
	
	$result = $tanya->lihatPertanyaan($username);
	
?>
<html>
<head>

</head>

<body>
<table class="table table-stripped" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Email</th>
			<th>Pertanyaan</th>
			<th>Tanggal</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
        <?php $i=1;
            while($row = mysql_fetch_array($result)){?>
				<tr>
					<td><?php echo $i ?>
					<td><?php echo $row["email_penanya"] ?></td>
					<td><?php echo $row["pertanyaan"] ?></td>
					<td><?php echo $row["tanggal"] ?></td>
					<td><a href="jawab.php?id=<?php echo $row['i']?>">Jawab Pertanyaan</a></td>
				</tr>
			<?php $i++;} ?>
	</tbody>
</table>	
</body>
</html>