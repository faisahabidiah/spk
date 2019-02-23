<?php 

require 'include/header.php';
require 'database/service.php';

if (isset($_POST["submit"])) {

	//cek apakah data berhasil di tambahkan atau tidak
	if (alternatifTambah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'alternatif.php';
			</script>
		";
	}else{
		echo "<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'alternatif.php';
			</script>";
		}
	
}

?>
<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
				<h3>Tambah Alternatif</h3>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<form method="post" action="">
		            <div class="form-group">
		                <label for="kode_alternatif">Kode Alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" id="kode_alternatif" name="kode_alternatif" placeholder="kode alternatif" required />
		            </div>
		            <div class="form-group">
		                <label for="nip_alternatif">Nip alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nip alternatif" name="nip_alternatif" value="" placeholder="nip alternatif" required />
		            </div>
		            <div class="form-group">
		                <label for="nama_alternatif">Nama alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nama alternatif" name="nama_alternatif" value="" placeholder="nama alternatif" required />
		            </div>
		            <div class="form-group">
		                <label for="email_alternatif">Email <span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Email alternatif" name="email_alternatif" value="" placeholder="email alternatif" required />
		            </div>
		            <div class="form-group">
		                <label for="telepon_alternatif">Telepon/HP<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nama alternatif" name="telepon_alternatif" value="" placeholder="telepon" required />
		            </div>           
		            <div class="form-group">
		                <button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		                <a class="btn btn-danger" href="alternatif.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
		            </div>
		        </form>
				</div>
		</div>
		</div>
	</div>
</div>

 <?php include "include/footer.php"; ?>