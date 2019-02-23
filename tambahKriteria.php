<?php 

//koneksi ke DBMS
$koneksi = mysqli_connect("localhost", "root", "", "spk_ahp");

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//ambil data dari tiap elemen dalam form
	
$result = mysqli_query($koneksi, );
	$kriteria = $_POST["kriteria"];
	$bobot = $_POST["bobot_kriteria"];

	//query insert data
	$query ="INSERT INTO tbl_kriteria VALUES ('', 'kriteria', 'bobot_kriteria')";

	// mysql_query($koneksi, $query);

}
	
//cek tombol submit sudah diteka atau belum
if (isset($_POST["submit"])) {
	// var_dump($_POST); 
}

require_once("include/header.php");

 ?>

<div class="page-header">
	<h2>Tambah Kriteria</h2>
</div>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="">
			<div class="form-group">
				<label>Kode Kriteria <span class="text-danger">*</span></label>
				<input class="form-control" type="text" readonly="readonly" name="kode_kriteria" value="">
			</div>
			<div class="form-group">
				<label>Kriteria <span class="text-danger">*</span></label>
				<input class="form-control" type="text" title="Masukkan Nama Kriteria" name="nama" value="">
			</div>
			<div class="form-group">
				<label>Bobot Kriteria <span class="text-danger">*(1-5)</span></label>
				<input class="form-control" type="number" min="1" max="5" name="bobot_kriteria">
			</div>
			<div class="form-group">
				<button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
				<a class="btn btn-danger" href=""><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
			</div>
		</form>
	</div>
</div>

<?php 

require_once("include/footer.php");

 ?>


<!-- !DOCTYPE html>
<html>
<head>
	<title>Tambah Kriteria</title>
</head>
<body>

		<h1>Tambah Kriteria</h1>

		<form action="" method="post">
			<ul>
				<li>
					<label for="kriteria">Kriteria :</label>
					<input type="text" name="kriteria" id="kriteria">
				</li>
				<li>
					<label for="bobot_kriteria">Bobot Kriteria :</label>
					<input type="text" name="bobot_kriteria" id="bobot_kriteria">
				</li>
				<li>
					<button type="submit" name="submit">Tambah Kriteria</button>
				</li>
			</ul>
</form>
</body>
</html> -->