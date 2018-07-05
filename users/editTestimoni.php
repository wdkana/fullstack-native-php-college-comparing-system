<?php
	include "../model/Testimoni_model.php";

  $testimoni = new Testimoni_model();
  session_start();

	$username = $_SESSION['username'];
	$hak_akses = $_SESSION['hak_akses'];

	if(!isset($username)){
        header('location:../');
    }
    if($hak_akses == 'admin'){
    	header('location:admin/dashboard-admin.php');
    } 

    $id = $_GET['i'];
    $row = mysql_fetch_array($testimoni->getId($id));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Testimoni</title>
	<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

</head>
<body>
    
	<form action="process/editTestimoniProcess.php" method="post">
    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
              <textarea name="testimoni" id="editor1" rows="10" cols="80">
              	<?php echo $row['testimoni'];?>
              </textarea><br>
              <input type="submit" value="simpan">
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
            </form>
</body>
</html>