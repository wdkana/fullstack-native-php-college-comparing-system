<!DOCTYPE html>
<html>
<head>
	<?php include 'views/head.php'; ?>
</head>
<body>
	<?php include 'views/header.php'; ?>
	<div id="main">
		<div class="wrapper">
			<?php include 'views/sidebar.php'; ?>

			<section id="content">
                <div class="container">
                	<?php
					    $page = @$_GET['page'];
					    $action = @$_GET['action'];
					    if($page == "") {
					      include 'views/page/home.php';
					    } else if ($page == "home") {
					      include 'views/page/home.php';
					    } else if ($page == "contoh") {
					      include 'views/page/contoh.php';
					    }
					?>
                </div>
            </section>
            <?php include 'views/rightsidebar.php'; ?>
			
		</div>
	</div>

	<?php include 'views/script.php'; ?>
</body>
</html>