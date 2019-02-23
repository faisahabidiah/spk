<?php 

require_once 'include/header.php';
require_once 'database/service.php';



if (isset($_POST["submit"])) {

	if (kriteriaTambah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'kriteria.php';
			</script>
		";
	}else{
		echo "<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'kriteria.php';
			</script>";
	}
	
}

 ?>
<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
				<h3>Tambah Kriteria</h3>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<form method="post" action="kriteriaTambah.php">
		            <div class="form-group">
		                <label for="kode_kriteria">Kode Kriteria<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" id="kode_kriteria" name="kode_kriteria" placeholder="kode kriteria" required>
		            </div>
		            <div class="form-group">
		                <label>Nama Kriteria<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nama Kriteria" name="nama_kriteria" value="" placeholder="nama kriteria" required>
		            </div>           
		            <div class="form-group">
		                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		                <a class="btn btn-danger" href="kriteria.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
		            </div>
		        </form>
				</div>
		</div>
		</div>
	</div>
</div>
<?php require_once 'include/footer.php'; ?>