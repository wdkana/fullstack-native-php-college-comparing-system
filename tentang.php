<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="element/animate.css">
	<script src="element/jquery-3.1.1.min.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>
	<script src="semantic/dist/components/accordion.js"></script>
	<script src="element/overlay.js"></script>
	<script src="element/transition.js"> </script>
	<script src="../element/angular.js"></script>
	<script src="element/date.js"></script>
</head>
<body style="background: #f9f9f9">
	<div class="ui top fixed menu" style="height: 60px">
		<div class="ui icon input">
			<a class="item" href="http://localhost/bandingkampus">Home</a>
			<a class="item" href="tentang.php">Tentang</a>
			<a class="item" href="kontak.php">Kontak</a>
		</div>
		<!--
		<div class="right item">
			<div class="ui action input">
				<input type="text" placeholder="nama kampus...">
					<div class="ui button">Cari</div>
			</div>
		</div>
	-->
	</div>

	<div class="ui container">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="ui center aligned container animated bounceInLeft">
			<span align="center" style="font-size: 74px; font-weight: 900;color:#444">Selalu Tahu Info Kampus</span>
		</div>
		<br/>
		<br/>
		<div class="ui center aligned container animated bounceInRight">
			<span align="center" style="font-size: 94px; font-weight: 900;color:#222;">Dengan Banding Kampus.</span>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="ui center aligned container">
			<div class="ui small images">
	  			<center>
	  				<img src="assets/images/tujuan.png">
	  			</center>
		
			</div>
				<span onclick="next()" style="color:#dc5538; cursor: pointer;"><i class="huge arrow alternate circle down outline icon tobot animated bounce infinite"></i></span>
			</div>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

			<div class="ui centered card">
				<div class="image">
			    	<img src="assets/img/logouser.png">
			  	</div>
			  	<div class="ui center aligned content">
			    	<a class="header">Mahasiswa Internal</a>
			  	</div>
			</div>
			<br/>
			<br/>
			<br/>
		<div class="ui center aligned container animated bounceInLeft">
			<span align="center" style="font-size: 74px; font-weight: 900;color:#444">Buka bukaan bareng informasi</span>
		</div>
		<br/>
		<br/>
		<div class="ui center aligned container animated bounceInLeft">
			<span align="center" style="font-size: 74px; font-weight: 900;color:#444">Seputar Kampus.</span>
		</div>
		<br/>
		<br/>

<div class="ui three column grid" id="next">
  <div class="column">
    <div class="ui segment">
    	<center>
      		<h2 class="ui header">
  				<i class="comments outline icon"></i>
  				<div class="content">
    				Transparan
  				</div>
			</h2>
		</center>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
    	<center>
      		<h2 class="ui header">
  				<i class="book icon"></i>
  				<div class="content">
    				Informatif
  				</div>
			</h2>
		</center>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
    	<center>
      		<h2 class="ui header">
  				<i class="clock outline icon"></i>
  				<div class="content">
    				Efisien
  				</div>
			</h2>
		</center>
    </div>
  </div>
</div>
	<br/>
	<br/>
	<div class="ui list">
						<div class="item">
						   	<i class="question circle large icon"></i>
						    <div class="content">
	    		<div class="ui hidden"></div>
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
	<br/>
	<br/>
<!-- pertanyaan 1: bagaimana cara membandingkan kampus -->
	<div class="ui modal pertanyaan1">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara membandingkan kampus</div>
		      	<p>Pengguna mengetik kampus pertama pada kolom inputan sebelah atas, lalu mengetik kampus kedua pada kolom inputan sebelah bawah</p>
		      	<p>Setelah selesai, klik tombol "Bandingkan" maka hasil akan muncul</p>
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
		      	<p>Klik pada bagian atas menu tab ke 2 (peringkat), maka akan muncul 10 daftar kampus dengan skor tertinggi ke terendah</p>
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
		      	<p>Klik pada bagian menu tab terakhir "masuk", lalu klik tombol "daftar disini"</p>
		      	<p>Isi data anda seperti email, password dan username</p>
		      	<p>Masuk akun email anda, dan lakukan konfirmasi pendaftaran. Selanjutnya anda dapat masuk dengan username dan password tersebut</p>
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
		      	<p>Setelah membandingkan kampus, akan ada bagian untuk bertanya. masukan email, dan ketikan apa yang akan anda tanya. Maka pesan anda akan sampai kepada seluruh pengguna bandingkampus yang berlingkup di kampus tersebut</p>
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

	</div>
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
				function next(){
				document.querySelector('#next').scrollIntoView({
  					behavior: 'smooth'
					});
				}
	</script>
	<script type="text/javascript">
		$('.ui.accordion')
 		 .accordion()
		;
	</script>
</body>


<style>
	@font-face{
		font-family: geomanist;
		src: url('assets/geomanist-regular-webfont.woff');
	}

	button, div, ul, li, span, a, p, small, b, h1, h2, h3, h4, h5, h6 {
		color: #555666;
		font-family: geomanist;
		font-variant: inherit;
	}
	.tobot:hover{
		color:#222;
		transition: .6s;
	}
</style>