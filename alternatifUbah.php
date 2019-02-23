<?php 

require 'include/header.php';
require 'database/service.php';


//ambil data di url
$kodealternatif = $_GET["kode_alternatif"];


$k = query("SELECT * FROM tbl_alternatif WHERE kode_alternatif = '$kodealternatif'")[0];

if (isset($_POST["submit"])) {

	//cek apakah data berhasil di tambahkan atau tidak
	if (alternatifUbah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil diubah');
			document.location.href = 'alternatif.php';
			</script>
		";
	}else{
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'alternatif.php';
			</script>";
		}
	
}

?>

<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="container">
			<div class="page-header">
				<h3>Ubah Alternatif</h3>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<form method="post" action="">
		            <div class="form-group">
		            	<input type="hidden" name="kode_alternatif_lama" value="<?= $k["kode_alternatif"] ?>">
		                <label for="kode_alternatif">Kode Alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" id="kode_alternatif" name="kode_alternatif" placeholder="kode alternatif" value="<?= $k["kode_alternatif"] ?>">
		            </div>
		            <div class="form-group">
		                <label>Nip alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nip alternatif" name="nip_alternatif" value="<?= $k["nip_alternatif"]?>"/>
		            <div class="form-group">
		                <label>Nama alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Nama alternatif" name="nama_alternatif" value="<?= $k["nama_alternatif"]?>"/>
		            <div class="form-group">
		                <label>Email alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Email alternatif" name="email_alternatif" value="<?= $k["email_alternatif"]?>"/>
		            <div class="form-group">
		                <label>Telepon alternatif<span class="text-danger">*</span></label>
		                <input class="form-control" type="text" title="Masukkan Telepon alternatif" name="telepon_alternatif" value="<?= $k["telepon_alternatif"]?>"/>
		            </div>           
		            <div class="form-group">
		                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" ></span> Simpan</button>
		                <a class="btn btn-danger" href="alternatif.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
		            </div>
		        </form>
				</div>
		</div>
		</div>
	</div>
</div>


 <?php require_once 'include/footer.php'; ?>