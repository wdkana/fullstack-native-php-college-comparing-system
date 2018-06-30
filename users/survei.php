<?php
    include "../model/Survei_model.php";
    include "../model/User_model.php";
    include "../model/Kampus_model.php";

    session_start();
    $username = $_SESSION['username'];

    $survei = new Survei_model();
    $user = new User_model();
    $kmp = new Kampus_model();

    $row = mysql_fetch_array($user->kampus($username));
    $kampus = $row['asal_kampus'];

    $row = mysql_fetch_array($kmp->viewKampus($kampus));
    $id = $row['id'];
    $nama_kampus = $row['nama_kampus'];

    $result = $survei->pertanyaan();

?>
<html>
<head>
    <title>Banding Kampus</title>

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
    <header id="header" class="page-topbar">
		<!-- start header nav-->
		<div class="navbar-fixed">
			<nav class="blue">
				<div class="nav-wrapper">
					<h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="../assets/images/materialize-logo.png" alt="Banding Kampus"></a> <span class="logo-text">Banding Kampus</span></h1>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
						</li>
						<!-- Dropdown Trigger -->                        
						<li>
							<a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- end header nav-->
	</header>
    <div class="main">
        <div class="wrapper">
        <aside id="left-sidebar-nav">
			<ul id="slide-out" class="side-nav fixed leftside-navigation">
				<li class="user-details cyan darken-2">
					<div class="row">
						<div class="col col s4 m4 l4">
							<img src="../assets/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
						</div>
						<div class="col col s8 m8 l8">
							<ul id="profile-dropdown" class="dropdown-content">
								<li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
								<li><a href="#"><i class="mdi-action-settings"></i> Settings</a></li>
								<li><a href="#"><i class="mdi-communication-live-help"></i> Help</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a></li>
								<li><a href="process/logoutProcess.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
							</ul>
							<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $username?>+<i class="mdi-navigation-arrow-drop-down right"></i></a>
							<p class="user-roal">Administrator</p>
						</div>
					</div>
				</li>
				<li class="bold">
					<a href="../users/dashboard.php" class="waves-effect waves-cyan">
						<i class="mdi-action-dashboard"></i> Dashboard
					</a>
				</li>
				<li class="bold">
					<a href="ulasan.php" class="waves-effect waves-cyan">
						<i class="mdi-communication-email"></i> Ulasan
						<span class="new badge">4</span>
					</a>
				</li>
				<li class="bold">
					<a href="../users/survei.php" class="waves-effect waves-cyan">
						<i class="mdi-editor-insert-invitation"></i> Isi Survei
					</a>
				</li>
				<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
						<li class="bold">
							<a class="collapsible-header waves-effect waves-cyan">
								<i class="mdi-action-invert-colors"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">Page</a></li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="mdi-image-palette"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">Page</a></li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a href="" class="waves-effect waves-cyan">
								<i class="mdi-device-now-widgets"></i> Page
								<span class="new badge"></span>
							</a>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="mdi-editor-border-all"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">Page</a></li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="mdi-editor-insert-comment"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">page</a></li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="mdi-social-pages"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">Page</a></li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a class="collapsible-header waves-effect waves-cyan">
								<i class="mdi-editor-insert-chart"></i> Dropdown
							</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="">Page</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li class="li-hover"><div class="divider"></div></li>
				<li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
				<li><a href=""><i class="mdi-image-grid-on"></i> Grid</a></li>
				<li><a href=""><i class="mdi-editor-format-color-fill"></i> Color</a></li>
				<li><a href=""><i class="mdi-communication-live-help"></i> Helpers</a></li>
				<li><a href=""><i class="mdi-action-swap-vert-circle"></i> Changelogs</a></li>
				<li class="li-hover"><div class="divider"></div></li>
				<li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
				<li class="li-hover">
					<div class="row">
						<div class="col s12 m12 l12">
							<div class="sample-chart-wrapper">
								<div class="ct-chart ct-golden-section" id="ct2-chart"></div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
		</aside>
        </div>
    </div>
    
    <section id="content">
        <div class="container">
            
            <?php
                if($nama_kampus == ''){
                    echo "maaf nama kampus anda tidak tersedia di aplikasi ini";
                } else if($survei->viewUser($username) > 0){
                    echo "anda sudah mengisi survei";
                } else {
            ?>
            <form action="process/surveiProcess.php" method="post">
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
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

        </div>
    </section>

    <?php
        }
    ?>
    <a href="process/logoutProcess.php">Logout</a>
</body>

</html>
