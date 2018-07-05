<?php
    include "../../model/Survei_model.php";
    $survei = new Survei_model();
    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location: ../../');
    }
     if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kampus</title>
  </head>
  <body>
  <a href="dashboard-admin.php">Back</a>
      <form action="process/pertanyaanProcess.php" method="post" enctype="multipart/form-data">
		  <label>Pertanyaan</label>
          <input type="text" name="pertanyaan" required placeholder="Pertanyaan"><br>
		  <label>Pilihan 1</label>
          <input type="text" name="pil1" required placeholder="Pilihan 1"><br>
		  <label>Pilihan 2</label>
          <input type="text" name="pil2" required placeholder="Pilihan 2"><br>
		  <label>Pilihan 3</label>
          <input type="text" name="pil3" required placeholder="Pilihan 3"><br>
		  <label>Pilihan 4</label>
          <input type="text" name="pil4" required placeholder="Pilihan 4"><br>
		  <label>Pilihan 5</label>
          <input type="text" name="pil5" required placeholder="Pilihan 5"><br>


          <input type="submit" name="simpan" value="simpan">
      </form>
      <hr>
      <h1>Daftar Pertanyaan</h1>
      <table border="1">
        <thead>
            <tr>
              <th>No</th>
              <th>Pertanyaan</th>
              <th>Pilihan 1</th>
              <th>Pilihan 2</th>
              <th>Pilihan 3</th>
              <th>Pilihan 4</th>
              <th>Pilihan 5</th>
            </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              $result = $survei->pertanyaan();
              while($row = mysql_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['pertanyaan'];?></td>
            <td><?php echo $row['pil1'];?></td>
            <td><?php echo $row['pil2'];?></td>
            <td><?php echo $row['pil3'];?></td>
            <td><?php echo $row['pil4'];?></td>
            <td><?php echo $row['pil5'];?></td>


            <td>
			<a href="edit_pertanyaan.php?id=<?php echo $row['id'];?>">Edit</a>
            <button onclick="hapus(<?php echo $row['id'];?>)">Hapus</button></td>
          </tr>
          <?php
              $no++;
              }
          ?>
        </tbody>
      </table>
      <script>
          function hapus(id) {
              var r = confirm("Apakah anda akan menghapus data ini?");
              if (r == true) {
                  window.location.href="process/deletePertanyaanProcess.php?i="+id;
              } else {
                  window.location.href="kampus.php";
              }
          }

      </script>
  </body>
</html>
