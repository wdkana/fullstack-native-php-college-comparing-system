<?php
    include "model/Banding_model.php";
    include "model/Akreditasi_model.php";

    $akreditasi = new Akreditasi_model();
    $banding = new Banding_model();

    $kampus1 = $_POST['kampus1'];
	  $row1 = $banding->Kampus($kampus1);
    $result1 = $akreditasi->viewAkreditasi($kampus1);

    $kampus2 = $_POST['kampus2'];
	  $row2 = $banding->Kampus($kampus2);
    $result2 = $akreditasi->viewAkreditasi($kampus2);
    $total1=$row1['dosen']+$row1['jurusan']+$row1['lingkungan']+$row1['prestasi']+$row1['mata_kuliah']+$row1['biaya'];
    $total2= $row2['dosen']+$row2['jurusan']+$row2['lingkungan']+$row2['prestasi']+$row2['mata_kuliah']+$row2['biaya'];

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
			
			<div class="ui teal progress" data-percent="<?php echo '50'?>" id="kampus1">
  				<div class="bar"></div>
  				<div class="label">530 kampus1</div>
			</div>
			
			<div class="ui teal progress" data-percent="<?php echo '30'?>" id="kampus2" onclick="next()">
  				<div class="bar"></div>
  				<div class="label">230 kampus2</div>
			</div>

<!-- table kampus1 -->

<table class="ui celled stripped table">
	<thead class="center aligned">
  		<tr>
  			<th colspan="3">
    			<div class="ui small image">
      				<div class="ui black ribbon label">
        			<i class="id flag"></i> 
        			<!-- nama kampus ti database -->
        			LPKIA
      				</div>
      				<img src="assets/images/lpkia.jpeg">
    			</div>
    		</th>
		</tr>
    	
    	<tr>
      		<th>Indikator</th>
      		<th>Score</th>
    	</tr>
  
 	</thead>
  	
  	<tbody>
    	<tr>
      		<td>Kualitas Dosen</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Lingkungan</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Prestasi</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Kesesuaian Matakuliah</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Biaya Kuliah</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr> 
      		<td>Fakultas</td>
      		<td class="center aligned double line">Nilai</td>
    	</tr>
    	<tr>  
      		<td>Akreditasi Jurusan</td>
      		<td class="center aligned double line">Nilai</td>
    	</tr>
  	</tbody>

  	<tfoot class="full-width">
    	<tr>
      		<th colspan="3">
         		<div class="ui label"><i class="user icon"></i> 223 Anggota Bandingkampus</div>
         		<div class="ui right floated small primary button" style="width: 280px"> <i class="trophy icon"></i>Total Score 500<!-- nilai total disini --></div>
      		</th>
      	</tr>
  	</tfoot>
</table>

<!-- table kampus2 -->

<table class="ui celled stripped table">
	<thead class="center aligned">
  		<tr>
  			<th colspan="3">
    			<div class="ui small image">
      				<div class="ui black ribbon label">
        			<i class="id flag"></i> 
        			<!-- nama kampus ti database -->
        			LPKIA
      				</div>
      				<img src="assets/images/lpkia.jpeg">
    			</div>
    		</th>
		</tr>
    	
    	<tr>
      		<th>Indikator</th>
      		<th>Score</th>
    	</tr>
  
 	</thead>
  	
  	<tbody>
    	<tr>
      		<td>Kualitas Dosen</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Lingkungan</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Prestasi</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Kesesuaian Matakuliah</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr>
      		<td>Biaya Kuliah</td>
      		<td class="center aligned">Nilai</td>
    	</tr>
    	<tr> 
      		<td>Fakultas</td>
      		<td class="center aligned double line">Nilai</td>
    	</tr>
    	<tr>  
      		<td>Akreditasi Jurusan</td>
      		<td class="center aligned double line">Nilai</td>
    	</tr>
  	</tbody>

  	<tfoot class="full-width">
    	<tr>
      		<th colspan="3">
         		<div class="ui label"><i class="user icon"></i> 223 Anggota Bandingkampus</div>
         		<div class="ui right floated small primary button" style="width: 280px"> <i class="trophy icon"></i>Total Score 500<!-- nilai total disini --></div>
      		</th>
      	</tr>
  	</tfoot>
</table>


<!-- data lama
			<table class="ui five column table">
			  	<thead>
			  		<h3><?php echo $row1['nama_kampus']?></h3>
				    <tr>
				    	<th>Kualitas Dosen</th>
					    <th>Lingkungan</th>
					    <th>Prestasi</th>
					    <th>Kesesuaian Mata Kuliah</th>
					    <th>Biaya Kuliah</th>
					    <th>Fakultas</th>
					    <th>Nilai Akreditasi Jurusan</th>
				  	</tr>
				</thead>
				<tbody>
				    <tr>
				      <td><?php echo $row1['dosen']?></td>
				      <td><?php echo $row1['lingkungan'];?></td>
				      <td><?php echo $row1['prestasi'];?></td>
				      <td><?php echo $row1['mata_kuliah'];?></td>
				      <td><?php echo $row1['biaya'];?></td>
				    </tr>
				</tbody>
			  <tfoot>
			    <tr><th>Total <?php echo $total1?></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			  </tr></tfoot>
			</table>

			<div class="ui hidden divider"></div>
			<div class="ui horizontal divider">
    			<h1>VERSUS</h1>
  			</div>
			<div class="ui hidden divider"></div>
			
			<table class="ui five column table">
			  	<thead>
			  		<h3><?php echo $row2['nama_kampus']?></h3>
				    <tr>
				    	<th>Kualitas Dosen</th>
					    <th>Lingkungan</th>
					    <th>Prestasi</th>
					    <th>Kesesuaian Mata Kuliah</th>
					    <th>Biaya Kuliah</th>
					    <th>Nilai Akreditasi Jurusan</th>
				  	</tr>
				</thead>
				<tbody>
				    <tr>
				      <td><?php echo $row2['dosen']?></td>
				      <td><?php echo $row2['lingkungan'];?></td>
				      <td><?php echo $row2['prestasi'];?></td>
				      <td><?php echo $row2['mata_kuliah'];?></td>
				      <td><?php echo $row2['biaya'];?></td>
				    </tr>
				</tbody>
			  <tfoot>
			    <tr><th>Total <?php echo $total2?></th>

			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			  </tr></tfoot>
			</table>



	<table border=1>
		  <tr>
			<th>Kampus <?php echo $row1['nama_kampus']?></th>
			<th>Kampus <?php echo $row2['nama_kampus']?></th>
		  </tr>
		  <tr>
			<td>Dosen : <?php echo $row1['dosen']?></td>
			<td>Dosen : <?php echo $row2['dosen']?></td>
		  </tr>
		  <tr>
			<td>Jurusan : <?php echo $row1['jurusan']?></td>
			<td>Jurusan : <?php echo $row2['jurusan']?></td>
		  </tr>
		  <tr>
			<td>Lingkungan : <?php echo $row1['lingkungan']?></td>
			<td>Lingkungan : <?php echo $row2['lingkungan']?></td>
		  </tr>
		  <tr>
			<td>Prestasi : <?php echo $row1['prestasi']?></td>
			<td>Prestasi : <?php echo $row2['prestasi']?></td>
		  </tr>
		  <tr>
			<td>Mata Kuliah : <?php echo $row1['mata_kuliah']?></td>
			<td>Mata Kuliah : <?php echo $row2['mata_kuliah']?></td>
		  </tr>
      <tr>
     <td>Biaya : <?php echo $row1['biaya']?></td>
     <td>Biaya : <?php echo $row2['biaya']?></td>
      </tr>
      <tr>
			<td>TOTAL NILAI : <?php echo $total1?> <br>
      <?php while($row = mysql_fetch_array($result1)){?>
        AKREDITASI JURUSAN: <?php echo $row['fakultas'];?> - <?php echo $row['akreditasi'];?><br>

      <?php }?>
      </td>
			<td>TOTAL NILAI : <?php echo $total2?><br>
      <?php while($row = mysql_fetch_array($result2)){?>
        AKREDITASI JURUSAN: <?php echo $row['fakultas'];?> - <?php echo $row['akreditasi'];?><br>
      <?php }?>
    </td>
		  </tr>
		</table>

	</div>

-->

<script type="text/javascript">
	$('.ui.rating')
  .rating()
;
	$('#kampus1').progress();
	$('#kampus2').progress();
</script>
</body>
</html>
