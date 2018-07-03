<?php
    include "../model/Testimoni_model.php";
    include "../model/User_model.php";

    $test = new Testimoni_model();
    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: login.php');
    }

    $result = $user->kampus($username);
    $row = mysql_fetch_array($result);
    $status = $row['status'];

    if($test->checkTestimoni($username) == 0 && $status == 'alumni'){
?>

      <html>
        <head>
          <title>Testimoni</title>
          <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

        </head>
        <body>
            <form action="process/testimoniProcess.php" method="post">
              <textarea name="testimoni" id="editor1" rows="10" cols="80">

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
      <?php
    } else {
      echo "<script>window.alert('Anda sudah mengisi testimoni atau status anda masih mahasiswa!')
            window.location.href='dashboard.php'</script>";
    }
?>
