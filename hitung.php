<?php 
require_once 'include/header.php';
require_once 'database/service.php';
?>

<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
				<h3>Perhitungan</h3>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<form method="post" action="">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Nama Alternatif</th>
								<?php 
								$aa =mysqli_query($koneksi,"SELECT COUNT(*) as jumlah FROM tbl_kriteria");
				    		while($row = mysqli_fetch_assoc($aa)) {
				   				if($row["jumlah"]>0){
									 	for ($a=1; $a<=$row["jumlah"] ; $a++) { 
							 				echo "<th>K$a</th>";
										 	}
										}
							    }
								 ?>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$qAlternatif = "SELECT * FROM tbl_alternatif";
							$resAlternatif = query($qAlternatif);
							foreach($resAlternatif as $nilai):?>
							<tr>
								<td><?= $nilai['kode_alternatif']; ?></td>
								<td><?= $nilai['nama_alternatif']; ?></td>
								<?php 
									$kodeAlt = $nilai['kode_alternatif'];
									$qValueKriteria = "SELECT a.kode_alternatif, k.kode_kriteria, rl.nilai
									           FROM tbl_alternatif a 
									           INNER JOIN tbl_relasi rl ON rl.kode_alternatif=a.kode_alternatif
									           INNER JOIN tbl_kriteria k ON k.kode_kriteria=rl.kode_kriteria
									           WHERE a.kode_alternatif='$kodeAlt'
									           ORDER BY a.kode_alternatif, k.kode_kriteria";
									$resValue = query($qValueKriteria);

									for($i=0;$i<=2;$i++){ ?>
								<td><?= $resValue[$i]['nilai']; ?></td>
								<?php } ?>
								
								<td>
									<a class="btn btn-xs btn-warning" href="hitung_ubah.php?kode=<?= $nilai['kode_alternatif']?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a> 
								</td>
							</tr>
						<?php endforeach?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>


<div class="panel panel-default">
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Alternatif</th>
				<?php 
				$aa =mysqli_query($koneksi,"SELECT COUNT(*) as jumlah FROM tbl_kriteria");
			    while($row = mysqli_fetch_assoc($aa)) {
			   		if($row["jumlah"]>0){
						 	for ($a=1; $a<=$row["jumlah"] ; $a++) { 
						 		echo "<th>K$a</th>";
						 	}
						}
			    }
				?>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$qAlternatif = "SELECT * FROM tbl_alternatif";
			$resAlternatif = query($qAlternatif);
			foreach($resAlternatif as $nilai):?>
			<tr>
				<td><?= $nilai['kode_alternatif']; ?></td>
				<td><?= $nilai['nama_alternatif']; ?></td>
				<?php 
					$kodeAlt = $nilai['kode_alternatif'];
					$qValueKriteria = "SELECT a.kode_alternatif, k.kode_kriteria, rl.nilai
					           FROM tbl_alternatif a 
					           INNER JOIN tbl_relasi rl ON rl.kode_alternatif=a.kode_alternatif
					           INNER JOIN tbl_kriteria k ON k.kode_kriteria=rl.kode_kriteria
					           WHERE a.kode_alternatif='$kodeAlt'
					           ORDER BY a.kode_alternatif, k.kode_kriteria";
					$resValue = query($qValueKriteria);

					for($i=0;$i<=2;$i++){ ?>
				<td><?= $resValue[$i]['nilai']; ?></td>
				<?php } ?>
				
				<td>
					<a class="btn btn-xs btn-warning" href="hitung_ubah.php?kode=<?= $nilai['kode_alternatif']?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a> 
				</td>
			</tr>
		<?php endforeach?>
		</tbody>
	<!-- <?php //endforeach; ?> -->
	</table>
</div>

<?php 
require_once 'include/footer.php';
 ?>