<?php
	include "../model/Tanya_model.php";
	
	$id = $_GET['id'];
	session_start();
	$username = $_SESSION['username'];
	$tanya = new Tanya_model();
	$pertanyaan = $tanya->lihatPertanyaanJawab($id);
	
?>

<html>

<head>

</head>

<body>
	<label><?php echo $pertanyaan['pertanyaan']?></label>
	<form action="process/jawabProcess.php" method="post">
		<input type="hidden" name="email" value="<?php echo $pertanyaan['email_penanya']?>">
		<input type="hidden" name="pertanyaan" value="<?php echo $pertanyaan['pertanyaan']?>">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="hidden" name="username" value="<?php echo $username?>">
		<textarea name="jawaban"></textarea><br>
		<button type="submit" value="simpan">Jawab</button>
                            
     </form>
</body>

</html>