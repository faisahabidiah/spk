<?php 

require_once 'include/header.php';
require_once 'database/service.php';

//ambil data di URL
$kodekriteria = $_GET["kode_kriteria"];
//query data s=berdasarkan kode_kriteria
$k = query("SELECT * FROM tbl_kriteria WHERE kode_kriteria = '$kodekriteria'")[0]; 


if (isset($_POST["submit"])) {

	//cek apakah data berhasil di ubah atau tidak
	if (kriteriaUbah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil diubah');
			document.location.href = 'kriteria.php';
			</script>
		";
	}else{
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'kriteria.php';
			</script>";
	}
	
}

?>
<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
				<h3>Ubah Kriteria</h3>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<form method="post" action="">
		            <div class="form-group">
		            	<input type="hidden" name="kode_kriteria_lama" value="<?= $k["kode_kriteria"] ?>">
		                <label for="kode_kriteria">Kode Kriteria<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" id="kode_kriteria" name="kode_kriteria" placeholder="kode kriteria" value="<?= $k["kode_kriteria"] ?>">
		            </div>
		            <div class="form-group">
		                <label>Nama Kriteria<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nama Kriteria" name="nama_kriteria" value="<?= $k["nama_kriteria"]?>"/>
		            </div>           
		            <div class="form-group">
		                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" ></span> Simpan</button>
		                <a class="btn btn-danger" href="kriteria.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
		            </div>
		        </form>
				</div>
		</div>
		</div>
	</div>
</div>
<!-- <div class="container">
	<div class="page-header">
		<h3>Ubah Kriteria</h3>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<form method="post" action="kriteria.php">
				<div class="form-group">
					// <input type="hidden" name="kode_kriteria_lama" value="<?= $k["kode_kriteria"] ?>">
					<label>Kode <span class="text-danger">*</span></label>
					// <input type="text" id="kode_kriteria" name="kode_kriteria" placeholder="kode kriteria" value="<?= $k["kode_kriteria"] ?>">
				</div>
				<div>
					<label for="nama_kriteria">Nama Kriteria</label>
					// <input type="text" id="nama_kriteria" name="nama_kriteria" value="<?= $k["nama_kriteria"]?>">
				</div>
				<div class="form-group">
					<div class="form-group">
	                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
	                <a class="btn btn-danger" href="kriteria.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
	            </div>
				</div>
			</form>
		</div>
	</div>
</div> -->

 <?php require 'include/footer.php'; ?>