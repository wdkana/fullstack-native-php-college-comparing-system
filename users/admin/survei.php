<?php
    include "../../model/Nilai_model.php";
    $nilai = new Nilai_model();

    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location: ../../');
    }
    if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }
    $result = $nilai->viewNilai();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Banding Kampus Admin</title>
        <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/Ionicons/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/dist/css/skins/_all-skins.min.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/morris.js/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/jvectormap/jquery-jvectormap.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="../../assets/admin_bootstrap/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard-admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Banding Kampus</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../assets/admin_bootstrap/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../assets/admin_bootstrap/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../assets/admin_bootstrap/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../assets/admin_bootstrap/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../assets/admin_bootstrap/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../assets/img/bandingkampuslogo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../assets/img/bandingkampuslogo.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $username;?>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="setting.php" class="btn btn-default btn-flat">Setting</a>
                </div>
                <div class="pull-right">
                  <a href="../process/logoutProcess.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="dashboard-admin.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="pertanyaan.php"><i class="fa fa-dashboard"></i> <span>Pertanyaan</span></a></li>
        <li><a href="kampus.php"><i class="fa fa-dashboard"></i> <span>Kampus</span></a></li>
        <li><a href="allUser.php"><i class="fa fa-dashboard"></i> <span>User</span></a></li>
        <li><a href="ulasan.php"><i class="fa fa-dashboard"></i> <span>Ulasan</span></a></li>
        <li><a href="survei.php"><i class="fa fa-dashboard"></i> <span>Survei</span></a></li>
        <li><a href="testimoni.php"><i class="fa fa-dashboard"></i> <span>Testimoni</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">     
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data nilai dari survei yang diisi oleh user</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                  <table class="table table-stripped" id="example1">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Dosen</th>
                          <th>Jurusan</th>
                          <th>Lingkungan</th>
                          <th>Prestasi</th>
                          <th>Matakuliah</th>
                          <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          while($row = mysql_fetch_array($result)){
                      ?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['dosen'];?></td>
                        <td><?php echo $row['jurusan'];?></td>
                        <td><?php echo $row['lingkungan'];?></td>
                        <td><?php echo $row['prestasi'];?></td>
                        <td><?php echo $row['mata_kuliah'];?></td>
                        <td><?php echo $row['biaya'];?></td>
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
                                window.location.href="process/deleteTestimoniProcess.php?i="+id;
                            } else {
                                window.location.href="kampus.php";
                            }
                        }

                    </script>
                </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
      <strong>Banding Kampus 2018</strong>
  </footer>


</div>
<!-- ./wrapper -->
</body>
<!-- jQuery 3 -->
<script src="../../assets/admin_bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/admin_bootstrap/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/admin_bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../assets/admin_bootstrap/bower_components/raphael/raphael.min.js"></script>
<script src="../../assets/admin_bootstrap/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/admin_bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../assets/admin_bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/admin_bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/admin_bootstrap/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/admin_bootstrap/bower_components/moment/min/moment.min.js"></script>
<script src="../../assets/admin_bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../assets/admin_bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../assets/admin_bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../assets/admin_bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/admin_bootstrap/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/admin_bootstrap/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/admin_bootstrap/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/admin_bootstrap/dist/js/demo.js"></script>

<script type="text/javascript" src="../../assets/ckeditor/ckeditor.js"></script>
<!-- DataTables -->
<script src="../../assets/admin_bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/admin_bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
</html>
