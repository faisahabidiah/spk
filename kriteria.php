<?php

require_once 'include/header.php';
require_once 'database/koneksi.php';
require_once 'database/service.php';

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

?>

<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Kriteria untuk Manajer Keuangan
      </h1>
     	<ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kriteria</li>
      </ol>
  </section>
<section class="content">
<div class="panel panel-default">
	<div class="panel-heading">
		<form class="form-inline">
			<div class="form-group">
				<a class="btn btn-primary" href="kriteriaTambah.php"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
			</div>
			<div class="form-group">
				<a class="btn btn-default" target="_blank" href=""><span class="glyphicon glyphicon-print"></span>Cetak</a>
			</div>
		</form>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr class="nw">
				<th>Kode Kriteria</th>
				<th>Nama Kriteria</th>
				<th>Aksi</th>
			</tr>
			<?php 
				foreach ($kriteria as $row) :
			?>
			<tr>
				<th><?= $row["kode_kriteria"]; ?></th>
				<th><?= $row["nama_kriteria"];?></th>
				<th>
					
					<a class="btn btn-xs btn-warning" href="kriteriaUbah.php?kode_kriteria=<?= $row["kode_kriteria"];?>"><span class="glyphicon glyphicon-edit"></span></a>
					<a class="btn btn-xs btn-danger" href="kriteriaHapus.php?kode_kriteria=<?= $row["kode_kriteria"]; ?>"><span class="glyphicon glyphicon-trash"></span></a>	
					
				</th>
			</tr>

			<?php endforeach; ?>

		</thead>
		</table>
	</div>
</div>
</div>
<?php

require_once 'include/footer.php';
?>
