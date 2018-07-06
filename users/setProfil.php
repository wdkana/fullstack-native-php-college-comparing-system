<?php
    include "../model/User_model.php";
    include "../model/Survei_model.php";
    $user = new User_model();
    $kmp = new Survei_model();
    $result = $kmp->ambilkampus();

    session_start();
    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];
    
    if(!$username){
        header('location: ../');
    }
    if($user->detailProfil($username) > 0){
        header('location: dashboard.php');
    } 
    if($hak_akses == 'admin'){
        header('location:admin/dashboard-admin.php');
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Banding Kampus Setting User</title>
        <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/Ionicons/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/dist/css/skins/_all-skins.min.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/morris.js/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/jvectormap/jquery-jvectormap.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="../assets/admin_bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h1 class="box-title">Setting Profil</h1>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <form action="process/setProfilProcess.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NIM</label>
                        <input name="nim" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Asal Kampus</label>
                        <select name="asal_kampus" class="form-control">
                            <option></option>
                            <?php
                                while($row = mysql_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                         <input name="nama_lengkap" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input name="fakultas" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input name="kelas" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input name="no_hp" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Foto KTM</label>
                        <input name="foto_ktm" type="file" class="form-control" required="true">
                    </div>
                    <h2>Sosial Media</h2>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram" placeholder="instagram" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook" placeholder="facebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" placeholder="twitter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <input value="mahasiswa" type="radio" name="status" onClick="displayForm(this)">Mahasiswa</input>
                        <input value="alumni" type="radio" name="status" onClick="displayForm(this)">Alumni</input>
                        <div style="visibility:hidden; position:relative" id="pekerjaan">
                            <select name="status_kerja">
                                <option value="tidak bekerja" selected>Tidak Bekerja</option>
                                <option value="bekerja">Bekerja</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-flat btn-sm btn-success">
                        <a href="process/logoutProcess.php" class="btn btn-flat btn-sm btn-danger">logout</a>
                    </div>
            </form>
</body>
</html>

<script type="text/javascript">
    function displayForm(c) {
        if (c.value == "mahasiswa") {
            document.getElementById("pekerjaan").style.visibility = 'hidden';
        } else if (c.value == "alumni") {
            document.getElementById("pekerjaan").style.visibility = 'visible';
        }
    }

</script>

          </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
</body>
<!-- jQuery 3 -->
<script src="../assets/admin_bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/admin_bootstrap/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/admin_bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/admin_bootstrap/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/admin_bootstrap/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/admin_bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/admin_bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/admin_bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/admin_bootstrap/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/admin_bootstrap/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/admin_bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/admin_bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/admin_bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/admin_bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/admin_bootstrap/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/admin_bootstrap/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/admin_bootstrap/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/admin_bootstrap/dist/js/demo.js"></script>

<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</html>