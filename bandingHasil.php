<?php
    include "model/Banding_model.php";
    include "model/Akreditasi_model.php";

    $akreditasi = new Akreditasi_model();
    $banding = new Banding_model();
	
    $kampus1 = $_POST['kampus1'];
	//melihat total nilai kampus
	$row1 = $banding->Kampus($kampus1);
    $result1 = $akreditasi->viewAkreditasi($kampus1);
	
	//melihat fakultas pada kampus 1
	$fakultas1 = $banding->fakultas($kampus1);
	$jurusan1 = $banding->jurusan($kampus1);
	
    $kampus2 = $_POST['kampus2'];
	$row2 = $banding->Kampus($kampus2);
    $result2 = $akreditasi->viewAkreditasi($kampus2);
	
	//melihat fakultas pada kampus 2
	$fakultas2 = $banding->fakultas($kampus2);
	$jurusan2 = $banding->jurusan($kampus2);
	
    $total1=$row1['dosen']+$row1['jurusan']+$row1['lingkungan']+$row1['prestasi']+$row1['mata_kuliah']+$row1['biaya'];
    $total2= $row2['dosen']+$row2['jurusan']+$row2['lingkungan']+$row2['prestasi']+$row2['mata_kuliah']+$row2['biaya'];

	$indikator1 = $total1 / ($total1+$total2) * 100;	$indikator2 = $total2 / ($total1+$total2) * 100;

	//mencari list jurusan kampus 1
	$listjurusan1 = "";
	$i=0;
    while($list = mysql_fetch_array($jurusan1)){
		if($i==0){
			$listjurusan1 = $listjurusan1 . $list['fakultas']. " [".$list['akreditasi']."]";
		}else {
			$listjurusan1 = $listjurusan1 . "<br>" .$list['fakultas']. " [".$list['akreditasi']."]";
		}
		$i++;
    }	
	
	//mencari list jurusan kampus 2
	$listjurusan2 = "";
	$i=0;
    while($list = mysql_fetch_array($jurusan2)){
		if($i==0){
			$listjurusan2 = $listjurusan2 . $list['fakultas']. " [".$list['akreditasi']."]";
		}else {
			$listjurusan2 = $listjurusan2 . "<br>" .$list['fakultas']. " [".$list['akreditasi']."]";
		}
		$i++;
    }	
	
	//mencari list fakultas kampus 1
	$i=0;
	$listfakultas1 = "";
    while($list = mysql_fetch_array($fakultas1)){
		if($i==0){
			$listfakultas1 = $listfakultas1 . $list['fakultas'];
		}else {
			$listfakultas1 = $listfakultas1 . ", " .$list['fakultas'];
		}
			$i++;
    }	
	
	//mencari list fakultas kampus 2
	$i=0;
	$listfakultas2 = "";
    while($list = mysql_fetch_array($fakultas2)){
		if($i==0){
			$listfakultas2 = $listfakultas2 . $list['fakultas'];
		}else {
			$listfakultas2 = $listfakultas2 . ", " .$list['fakultas'];
		}
			$i++;
    }	
	
	
	//menentukan kampus terbaik
	if($indikator1>$indikator2){
		$unggulkam = $kampus1;
		$ungguldos = ($row1['dosen'] - $row2['dosen']) / $row1['dosen'] * 100;
		$unggullingkung = ($row1['lingkungan'] - $row2['lingkungan']) / $row1['lingkungan'] * 100;
		$unggulprestasi = ($row1['prestasi'] - $row2['prestasi']) / $row1['prestasi'] * 100;
		$unggulmatkul = ($row1['mata_kuliah'] - $row2['mata_kuliah']) / $row1['mata_kuliah'] * 100;
		$unggulbiaya = ($row1['biaya'] - $row2['biaya']) / $row1['biaya'] * 100;
		$unggulfakultas = $listfakultas1;
		$unggulakreditasi = $listjurusan1;

	}else if($indikator2>$indikator1){
		$unggulkam = $kampus2;
		$ungguldos = ($row2['dosen'] - $row1['dosen']) / $row2['dosen'] * 100;
		$unggullingkung = ($row2['lingkungan'] - $row1['lingkungan']) / $row2['lingkungan'] * 100;
		$unggulprestasi = ($row2['prestasi'] - $row1['prestasi']) / $row2['prestasi'] * 100;
		$unggulmatkul = ($row2['mata_kuliah'] - $row1['mata_kuliah']) / $row2['mata_kuliah'] * 100;
		$unggulbiaya = ($row2['biaya'] - $row1['biaya']) / $row2['biaya'] * 100;
		$unggulfakultas = $listfakultas2;
		$unggulakreditasi = $listjurusan2;
	}else {
		$unggulkam = "Nilai Kampus Seimbang";
		$ungguldos = 0;
		$unggullingkung = 0;
		$unggulprestasi = 0;
		$unggulmatkul = 0;
		$unggulbiaya = 0;
		$unggulfakultas = "";
		$unggulakreditasi = "";
	}
	
    if($kampus1 == $kampus2){
        echo "<script>window.alert('Nama Kampus tidak boleh sama!!');
              window.location.href='index.php';</script>";
    }
		
?>
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
	<body>
		<div class="ui top fixed menu">
		    	<div class="ui icon input">
		    		<a class="item" href="http://localhost/bandingkampus">Home</a>
		    		<a class="item">Tentang</a>
					<a class="item">Kontak</a>
					<a class="item">Blog</a>
		    	</div>

			<div class="right item">
			    <div class="ui action input">
			    	<input type="text" placeholder="nama kampus...">
			      	<div class="ui button">Cari</div>
			    </div>
			</div>
		</div>
		<div class="ui container">
			<br/>
			<br/>
			<br/>
			<br/>
			<h1>HASIL PERBANDINGAN</h1>
			<br/>
			<br/>
			
			<div class="ui teal progress" data-percent="<?php echo ceil($indikator1)?>" id="kampus1">
  				<div class="bar"></div>
  				<div class="label"><p><i class="trophy icon"></i> <?php echo $kampus1; ?> <i style="color:red"><?php echo $total1?> Point</i></p></div>
			</div>
			

			<span onclick="next()"><div class="ui teal progress" data-percent="<?php echo ceil($indikator2)?>" id="kampus2" style="cursor: pointer;">
  				<div class="bar"></div>
  				<div class="label"><p><i class="trophy icon"></i> <?php echo $kampus2; ?> <i style="color:red"><?php echo $total2?> Point</i></p></div>
			</div>
			</span>
			<div class="ui hidden divider"></div>
			
<!-- table kampus1 -->

<table class="ui celled stripped table" style="box-shadow: 5px 7px 7px 5px #f5f5f5">
	<thead class="center aligned">
  		<tr>
  			<th colspan="3">
    			<div class="ui small image">
      				<div class="ui black ribbon label">
        			<i class="id flag"></i> 
        			<!-- nama kampus ti database -->
        			<?php echo $kampus1 ?>
      				</div>
      				<img height="200" width="200" src="assets/images/<?php echo $row1['foto'] ?>">
    			</div>
    		</th>
		</tr>
    	
    	<tr id="next">
      		<th>Indikator</th>
      		<th>Score</th>
    	</tr>
  
 	</thead>
  	
  	<tbody>
    	<tr>
      		<td>Kualitas Dosen</td>
      		<td class="center aligned"><?php echo $row1['dosen'] ?></td>
    	</tr>
    	<tr>
      		<td>Lingkungan</td>
      		<td class="center aligned"><?php echo $row1['lingkungan'] ?></td>
    	</tr>
    	<tr>
      		<td>Prestasi</td>
      		<td class="center aligned"><?php echo $row1['prestasi'] ?></td>
    	</tr>
    	<tr>
      		<td>Kesesuaian Matakuliah</td>
      		<td class="center aligned"><?php echo $row1['mata_kuliah'] ?></td>
    	</tr>
    	<tr>
      		<td>Biaya Kuliah</td>
      		<td class="center aligned"><?php echo $row1['biaya'] ?></td>
    	</tr>
    	<tr> 
      		<td>Fakultas</td>
			<td class="center aligned double line">
			<?php echo $listfakultas1; ?></td>
    	</tr>
    	<tr>  
      		<td>Akreditasi Jurusan</td>
      		<td class="center aligned double line">
			<?php echo $listjurusan1;?></td>
    	</tr>
  	</tbody>

  	<tfoot class="full-width">
    	<tr>
      		<th colspan="3">
         		<div class="ui label"><i class="user icon"></i> 223 Anggota Bandingkampus</div>
         		<div class="ui right floated small primary button" style="width: 280px;cursor:default;"> <i class="trophy icon"></i>Total Score <?php echo $total1 ?><!-- nilai total disini --></div>
         		<!-- komentar -->
         		<div class="ui comments">
				  	<div class="comment">
				    	<a class="avatar">
				    		<i class="checkmark icon"></i>
				    	</a>
					    <div class="content">
					      	<a class="author">Nama Pengirim Ulasan</a>
					      		<div class="metadata">
					        		<div class="date">Tanggal</div>
					      		</div>
					      	<div class="text">
					        	<p>ini adalah komentar ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan</p>
					      	</div>
					   	</div>
				  	</div>
				</div>
				
				<form class="ui reply form" method="POST" action="">
				    <div class="four wide field">
				    	<label>email</label>
				    	<input type="email" name="email">
				    </div>
				    <div class="field">
				    	<textarea name=""></textarea>
				    </div>
				    <button class="ui primary submit labeled icon button" type="submit">
				     	<i class="icon edit"></i> Tanyakan
				    </button>
				</form>
      		</th>
      	</tr>
  	</tfoot>
</table>

<div class="ui hidden divider"></div>
<div class="ui horizontal divider">
	<h1>VERSUS</h1>
</div>
<div class="ui hidden divider"></div>


<!-- table kampus2 -->

<table class="ui celled stripped table" style="box-shadow: 5px 7px 7px 5px #f5f5f5">
	<thead class="center aligned">
  		<tr>
  			<th colspan="3">
    			<div class="ui small image">
      				<div class="ui black ribbon label">
        			<i class="id flag"></i> 
        			<!-- nama kampus ti database -->
        			<?php echo $kampus2?>
      				</div>
      				<img height="200" width="200" src="assets/images/<?php echo $row2['foto']?>">
    			</div>
    		</th>
		</tr>
    	
    	<tr id="next">
      		<th>Indikator</th>
      		<th>Score</th>
    	</tr>
  
 	</thead>
  	
  	<tbody>
    	<tr>
      		<td>Kualitas Dosen</td>
      		<td class="center aligned"><?php echo $row2['dosen'] ?></td>
    	</tr>
    	<tr>
      		<td>Lingkungan</td>
      		<td class="center aligned"><?php echo $row2['lingkungan'] ?></td>
    	</tr>
    	<tr>
      		<td>Prestasi</td>
      		<td class="center aligned"><?php echo $row2['prestasi'] ?></td>
    	</tr>
    	<tr>
      		<td>Kesesuaian Matakuliah</td>
      		<td class="center aligned"><?php echo $row2['mata_kuliah'] ?></td>
    	</tr>
    	<tr>
      		<td>Biaya Kuliah</td>
      		<td class="center aligned"><?php echo $row2['biaya'] ?></td>
    	</tr>
    	<tr> 
      		<td>Fakultas</td>
			<td class="center aligned double line">
			<?php
			  $i=0;
			  $listfakultas = "";
              while($list = mysql_fetch_array($fakultas2)){
				if($i==0){
					$listfakultas = $listfakultas . $list['fakultas'];
				}else {
					$listfakultas = $listfakultas . ", " .$list['fakultas'];
				}
				$i++;
              }
			  echo $listfakultas;
          ?></td>
    	</tr>
    	<tr>  
      		<td>Akreditasi Jurusan</td>
      		<td class="center aligned double line">
			<?php
			  $listjurusan = "";
			  $i=0;
              while($list = mysql_fetch_array($jurusan2)){
				if($i==0){
					$listjurusan = $listjurusan . $list['fakultas']. " [".$list['akreditasi']."]";
				}else {
					$listjurusan = $listjurusan . "<br>" .$list['fakultas']. " [".$list['akreditasi']."]";
				}
				$i++;
              }
			  echo $listjurusan;
          ?></td>
    	</tr>
  	</tbody>

  	<tfoot class="full-width">
    	<tr>
      		<th colspan="3">
         		<div class="ui label"><i class="user icon"></i> 223 Anggota Bandingkampus</div>
         		<div class="ui right floated small primary button" style="width: 280px;cursor:default;"> <i class="trophy icon"></i>Total Score <?php echo $total2 ?><!-- nilai total disini --></div>
         		<!-- komentar -->
         		<div class="ui comments">
				  	<div class="comment">
				    	<a class="avatar">
				    		<i class="checkmark icon"></i>
				    	</a>
					    <div class="content">
					      	<a class="author">Nama Pengirim Ulasan</a>
					      		<div class="metadata">
					        		<div class="date">Tanggal</div>
					      		</div>
					      	<div class="text">
					        	<p>ini adalah komentar ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan ulasan dari sang pengirim ulasan</p>
					      	</div>
					   	</div>
				  	</div>
				</div>
				
				<form class="ui reply form" method="POST" action="">
					<div class="four wide field">
				    	<label>email</label>
				    	<input type="email" name="email">
				    </div>
				    <div class="field">
				    	<textarea name=""></textarea>
				    </div>
				    <button class="ui primary submit labeled icon button" type="submit">
				     	<i class="icon edit"></i> Tanyakan
				    </button>
				</form>
      		</th>
      	</tr>
  	</tfoot>
</table>

<div class="ui hidden divider">
<div class="ui hidden divider">
<div class="ui hidden divider">
<div class="ui hidden divider">
<h2>Persentase Kemenangan</h2>
<table class="ui inverted blue table">
  	<thead>
  		<tr class="center aligned">
  			<th colspan="3"><?php echo $unggulkam;?></th>
  		</tr>
	    <tr>
		    <th>Indikator</th>
		    <th>Keunggulan ( % )</th>
	  	</tr>
	</thead>

	<tbody>
		<?php if($ungguldos>0){ ?>
	    <tr>
	      <td>Kualitas Dosen</td>
	      <td><?php echo floor($ungguldos) ?><i> % Lebih Besar</i></td>
	    </tr>
		<?php }?>
		<?php if($unggullingkung>0){ ?>
		<tr>
	      <td>Lingkungan</td>
	      <td><?php echo floor($unggullingkung) ?><i> % Lebih Besar</i></td>
	    </tr>
		<?php }?>
		<?php if($unggulprestasi>0){ ?>
		<tr>
	      <td>Prestasi</td>
	      <td><?php echo floor($unggulprestasi) ?><i> % Lebih Besar</i></td>
	    </tr>		
		<?php }?>
		<?php if($unggulmatkul>0){ ?>
	    <tr>
	      <td>Kesesuaian Matakuliah</td>
	      <td><?php echo floor($unggulmatkul) ?><i> % Lebih Besar</i></td>
	    </tr>
		<?php }?>
		<?php if($unggulbiaya>0){ ?>
		<tr>
	      <td>Biaya Kuliah</td>
	      <td><?php echo floor($unggulbiaya) ?><i> % Lebih Besar</i></td>
	    </tr>
		<?php }?>
		<?php if($unggulfakultas!=""){ ?>
		<tr>
	      <td>Fakultas</td>
	      <td><?php echo $unggulfakultas ?></td>
	    </tr>
		<?php }?>
		<?php if($unggulakreditasi!=""){ ?>
		<tr>
	      <td>Akreditasi Jurusan</td>
	      <td><?php echo $unggulakreditasi ?></td>
	    </tr>
		<?php }?>
  	</tbody>
</table>

<!-- data lama

			<td>TOTAL NILAI : <?php echo $total1?> <br>
      <?php while($row = mysql_fetch_array($result1)){?>
        AKREDITASI JURUSAN: <?php echo $row['fakultas'];?> - <?php echo $row['akreditasi'];?><br>

      <?php }?>

-->

<script type="text/javascript">
		function next(){
		document.querySelector('#next').scrollIntoView({
  behavior: 'smooth'
});
	}
</script>

<script type="text/javascript">
	$('.ui.rating')
  .rating()
;
	$('#kampus1').progress();
	$('#kampus2').progress();
</script>
</body>
</html>
<style>
	p, small, b, h1, h2, h3, h4, h5, h6 {
		color: #555666;
	}
	.tobot:hover{
		color:#222;
		transition: .6s;
	}
</style>
