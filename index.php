<?php
		include "model/Survei_model.php";
		$kmp = new Survei_model();
		$result = $kmp->ambilkampus();
		$result1 = $kmp->ambilkampus();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    	<script src="element/jquery-3.1.1.min.js"></script>
	    <script src="semantic/dist/semantic.min.js"></script>
	    <script src="semantic/dist/components/accordion.js"></script>
	    <script src="element/overlay.js"></script>
	    <script src="element/transition.js"> </script>
		<script src="../element/angular.js"></script>
    	<script src="element/date.js"></script>
	</head>
	<body>
		<div class ="ui container">
			<br/>
			<h2 class="ui center aligned icon header">
				<a href="space_iklan1.php"><center><div class="ui leaderboard test ad" style="background: #222; opacity: 0.9" data-text="Space Iklan 1"></div></center></a>
  				<span style="color:#dc5538">Banding</span>&nbsp;&nbsp;<i class="id flag"></i><span style="color:#3B5998">Kampus</span>
			</h2>

		<div class="ui top attached tabular menu">
		  	<a class="item active" data-tab="bandingkan">Bandingkan</a>
		  	<a class="item" data-tab="peringkat">Peringkat</a>
		  	<a class="item" data-tab="semuakampus">Semua Kampus</a>
		  	<a class="item" data-tab="masuk">Masuk</a>
		</div>

		<div class="ui center aligned bottom attached tab segment active" data-tab="bandingkan"">

		<div class="ui hidden divider"></div>

		<div class="ui center aligned container">
				<div class="ui steps">
  <div class="active step">
    <i class="balance scale icon"></i>
    <div class="content">
      <div class="title">Bandingkan</div>
      <div class="description">cari kampus yang akan dibandingkan</div>
    </div>
  </div>
  <div class="disabled step">
    <i class="star icon"></i>
    <div class="content">
      <div class="title">Cek Score</div>
      <div class="description">lihat dan bandingkan score kampus</div>
    </div>
  </div>
  <div class="disabled step">
    <i class="question icon"></i>
    <div class="content">
      <div class="title">Tanya User</div>
      <div class="description">ajukan pertanyaan kepada mahasiswa internal</div>
    </div>
  </div>
</div>
		</div>

		<div class="ui hidden divider"></div>

		<form action="bandingHasil.php" method="POST">
		<div class="ui center aligned stackable grid container">
		  	<div class="column">
		    	<select class="ui huge search dropdown" name="kampus1">
						<option value="">Kampus 1</option>
						<?php while($row = mysql_fetch_array($result)){?>
					 <option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
				 		<?php }?>
				</select>

		  	</div>
		 </div>

		  	<div class="ui horizontal divider">
    			<h1>VERSUS</h1>
  			</div>
  		<div class="ui center aligned stackable grid container">
		  	<div class="column">
		    	<select class="ui huge search dropdown" name="kampus2">
					 <option value="">Kampus 2</option>
					 <?php while($row = mysql_fetch_array($result1)){?>
					<option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
					 <?php }?>
				</select>
		  	</div>
		 </div>
		 <div class="ui hidden divider"></div>


		<div class="ui buttons">
			 <button class="ui huge facebook button">Lihat Website</button>
			 	<div class="or"></div>
			 <button class="ui huge google plus button" type="submit"> Bandingkan</button>
		</div>
		</div>
	</form>
		<!-- tab2 -->
		<div class="ui bottom attached tab segment" data-tab="peringkat"">

			<div class="ui hidden divider"></div>

			<div class="ui justified aligned container">
				<h1>PERINGKAT</h1>
	  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</div>

		<!-- tab3 -->
		<div class="ui bottom attached tab segment" data-tab="semuakampus"">

			<div class="ui hidden divider"></div>

			<div class="ui justified aligned container">
				<h1>SEMUA KAMPUS</h1>
	  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</div>

		<!-- tab4 -->
		<div class="ui bottom attached tab segment" data-tab="masuk"">

			<div class="ui hidden divider"></div>

			<div class="ui justified aligned container">
			<div class="ui hidden divider"></div>
	  			<form class="ui large form">
				  <div class="two fields">
				    <div class="field">
				      <label>Username</label>
				      <input type="text">
				    </div>
				    <div class="field">
				      <label>Password</label>
				      <input type="password">
				    </div>
				  </div>
				  <div class="ui center aligned container">
				  	<button class="ui facebook button" type="submit" style="width:200px">Masuk</button>
				  </div>
				</form>
				<h4 class="ui horizontal divider header">
				<button onclick="daftar()" class="ui button">Daftar Disini</button>
				atau
 				<button onclick="lupapassword()" class="ui button">Lupa Password?</button>
				</h4>
				<div class="ui hidden divider"></div>
				<div class="ui hidden divider"></div>



			</div>

		</div>

		<div id="slideshow" class="ui visible message">
		<h3 class="ui top attached header">
  			Testimonial Alumni
		</h3>
		<!-- random looping mulai dari sini -->
   			<div class="ui link items">
  				<div class="item">
  					<div class="ui tiny image">
      					<img src="assets/img/logouser.png">
    				</div>
    				<div class="content">
      					<div class="header">Nama Lengkap</div>
      					<div class="description">
        					<p>Testimonial dari database</p>
      					</div>
    				</div>
  				</div>
			</div>
		<!-- random beres -->
		</div>

	<div class="ui hidden divider"></div>
	<div class="ui hidden divider"></div>

	<div class="ui internally celled grid" style="background: #fff">
	  	<div class="row">
	    	<div class="three wide column">
	      		<h3 align="center">Kampus Terdaftar</h3>
	      		<hr/>
	      		<br/>
	    		<!-- looping list kampus -->
	      		<img src="assets/img/logolpkia.jpg" class="ui small image">
	      		<p class="ui large header">LPKIA</p>
	      		<hr/>
	      		<!-- end looping -->
	    	</div>

	    	<!-- mid content -->
	    	<div class="ten wide column">
	    		<h1 class="ui header">Panduan Pengguna</h1>
					<div class="ui list">
						<div class="item">
						   	<i class="question circle large icon"></i>
						    <div class="content">
						     	<a class="ui medium header" onclick="pertanyaan1()">Bagaimana cara membandingkan kampus?</a>
						    </div>
						</div>
						<div class="item">
						    <i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan2()">Bagaimana cara melihat peringkat kampus?</a>
						    </div>
						</div>
						<div class="item">
						    <i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan3()">Bagaimana cara mendaftar sebagai anggota?</a>
						    </div>
						</div>
						<div class="item">
						   	<i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan4()">Bagaimana cara bertanya kepada mahasiswa internal?</a>
						    </div>
						</div>
					</div>
				<div class="ui hidden divider"></div>
				<h3 class="ui header">Section Two</h3>
				</div>
	    	<!-- end of mid content -->
	    </div>
	</div>
</div>
</div>
</div>
</div>



	<!-- pertanyaan 1: bagaimana cara membandingkan kampus -->
	<div class="ui modal pertanyaan1">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara membandingkan kampus</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

		<!-- pertanyaan 2: bagaimana cara melihat peringkat kampus -->
	<div class="ui modal pertanyaan2">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara melihat peringkat kampus</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

			<!-- pertanyaan 3: bagaimana cara mendaftar sebagai anggota -->
	<div class="ui modal pertanyaan3">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara mendaftar sebagai anggota</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

			<!-- pertanyaan 4: bagaimana cara bertanya -->
	<div class="ui modal pertanyaan4">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara bertanya kepada mahasiswa internal</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

	<!-- pertanyaan berakhir -->

	<!-- modal daftar user -->
		<div class="ui modal daftar">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header"><i class="user circle icon"></i> Daftar Akun BandingKampus</div>
		     	<div class="ui divider"></div>
	  				<div class="ui hidden divider"></div>
		      	<form class="ui large form">
				  <div class="four fields">
				    <div class="field">
				      <label>Username</label>
				      <input type="text">
				    </div>	
				    <div class="field">
				      <label>Email</label>
				      <input type="text">
				    </div>
				    <div class="field">
				      <label>Password</label>
				      <input type="password">
				    </div>
				    <div class="field">
				      <label>Ulangi Password</label>
				      <input type="password">
				    </div>
				  </div>
		    </div>
	  	</div>
	  	<div class="ui hidden divider"></div>
	  	<div class="actions">
		    <button class="ui negative right labeled icon button" type="submit">
		      Daftar
		      <i class="checkmark icon"></i>
		    </button>
	  	</div>
	  	</form>
	</div>

	<!-- modal daftar user berakhir -->

		<!-- modal lupa password -->
		<div class="ui modal lupapassword">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header"><i class="question circle icon"></i> Lupa Password </div>
		     	<div class="ui divider"></div>
	  				<div class="ui hidden divider"></div>
		      	<form class="ui large form">
	  				<div class="ui center aligned container">
				  <div class="field">
				      <label>Masukan Alamat Email</label>
				      <input type="email" style="width:50%">
				  </div>
				  <small><i>Kami akan mengirimkan konfirmasi reset password ke email yang anda masukan diatas.</i></small>
				  	</div>
		    </div>
	  	</div>
	  	<div class="ui hidden divider"></div>
	  	<div class="actions">
		    <button class="ui negative right labeled icon button" type="submit">
		      Reset Password
		      <i class="checkmark icon"></i>
		    </button>
	  	</div>
	  	</form>
	</div>

	<!-- modal lupa password berakhir -->



	<!-- js start -->
	<script type="text/javascript">
	function pertanyaan1(){
	$('.ui.modal.pertanyaan1')
  		.modal('show')
	;
	}
	function pertanyaan2(){
	$('.ui.modal.pertanyaan2')
  		.modal('show')
	;
	}
	function pertanyaan3(){
	$('.ui.modal.pertanyaan3')
  		.modal('show')
	;
	}
	function pertanyaan4(){
	$('.ui.modal.pertanyaan4')
  		.modal('show')
	;
	}
	function daftar(){
	$('.ui.modal.daftar')
  		.modal('show')
	;
	}
	function lupapassword(){
	$('.ui.modal.lupapassword')
  		.modal('show')
	;
	}
	</script>
		<script type="text/javascript">
			$("#slideshow > div:gt(0)").hide();
			setInterval(function() {
			  $('#slideshow > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slideshow');
			}, 2500);
		</script>

		<script src="element/popup.js"></script>
		<script type="text/javascript">
			$('.ui.dropdown')
  				.dropdown()
			;
			$('.menu .item')
  				.tab()
			;
		</script>
	<!-- js end -->
	</body>
</html>

