<?php 
require_once 'include/header.php';
require_once 'database/service.php';
$kode = $_GET['kode'];
$q = "SELECT r.kode_kriteria, r.kode_alternatif, r.nilai 
	  FROM tbl_alternatif a 
	  JOIN tbl_relasi r ON r.kode_alternatif=a.kode_alternatif 
	  WHERE a. kode_alternatif='$kode'";

$result = query($q);
$namaOrang = $result[0]['kode_alternatif'];

 ?>

div
<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
 				<h3>Ubah Nilai Bobot &raquo; <?= $namaOrang; ?></h3>
 			</div>
		 <div class="row">
		 	<div class="col-sm-4">
		 		<form action="hitung.php" method="post" >
			 		<div class="form-group">
			 			<?php foreach($result as $opoyo):?>
			 			<label><?= $opoyo['kode_kriteria']; ?><span class="text-danger"> * (1-9)</span></label>
			 			<input class="form-control" type="number" min="1" max="9" name="" value="<?= $opoyo['nilai'];?>"/><br>
			 		<?php endforeach?>
			 		</div>
			 		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save"> Simpan</span></button>
		 			<a class="btn btn-danger" href="hitung.php"><span class="glyphicon glyphicon-arrow-left"> Kembali</span></a>
			 	</form>
		 	</div>
		 </div>
	</div>
</div>
</div>