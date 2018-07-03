<?php
    include "../model/Testimoni_model.php";
    include "../model/User_model.php";

    $test = new Testimoni_model();
    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];
    if(!isset($username)){
        header('location: ../');
    }

    $result = $user->kampus($username);
    $row = mysql_fetch_array($result);
    $status = $row['status'];

    if($test->checkTestimoni($username) == 0 && $status == 'alumni'){
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Testimoni</title>
          <meta name="msapplication-TileColor" content="#00bcd4">
          <meta name="msapplication-TileImage" content="../assets/images/favicon/mstile-144x144.png">

          <link rel="icon" href="../assets/images/favicon/favicon-32x32.png" sizes="32x32">
          <link rel="apple-touch-icon-precomposed" href="../assets/images/favicon/apple-touch-icon-152x152.png">

          <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
          <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
          <link href="../assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

          <script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
            <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins.js"></script>
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
