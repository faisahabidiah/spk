<?php 

require_once 'database/koneksi.php';

/**
 *Select Data */
//ambil data dari tabel kriteria
$kriteria = query ("SELECT * FROM tbl_kriteria");
$alternatif = query ("SELECT * FROM tbl_alternatif");

function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

/*KRITERIA*/

function kriteriaTambah($data) {
	//ambil data dari tiap elemen dalam form
	global $koneksi;

	$kkriteria = $data["kode_kriteria"];
	$nkriteria = $data["nama_kriteria"];

	//query insert data
	$queryKriteria = "INSERT INTO tbl_kriteria VALUES
		('$kkriteria', '$nkriteria')";
		
	mysqli_query($koneksi, $queryKriteria);
	return mysqli_affected_rows($koneksi);
}
	
function kriteriaHapus($kodekriteria){
	global $koneksi;
	mysqli_query ($koneksi, "DELETE FROM tbl_kriteria WHERE kode_kriteria = '$kodekriteria'");
	return mysqli_affected_rows($koneksi);
}

function kriteriaUbah($data){
	global $koneksi;
	$kode_kriteria_lama = $data["kode_kriteria_lama"];
	$kkriteria = $data["kode_kriteria"];
	$nkriteria = $data["nama_kriteria"];
	
	//query ubah data
	$queryKriteria = "UPDATE tbl_kriteria SET
									kode_kriteria = '$kkriteria',
									nama_kriteria = '$nkriteria'
									WHERE kode_kriteria = '$kode_kriteria_lama';
								";

	mysqli_query($koneksi, $queryKriteria);

	return mysqli_affected_rows($koneksi);
}

function alternatifTambah($data) {
	//ambil data dari tiap elemen dalam form
	global $koneksi;

	$kalternatif = $data["kode_alternatif"];
	$nip = $data["nip_alternatif"];
	$nalternatif = $data["nama_alternatif"];
	$email = $data["email_alternatif"];
	$tlp = $data["telepon_alternatif"];

	//query insert data
	$queryAlternatif = "INSERT INTO tbl_alternatif 
						VALUES
					('$kalternatif','$nip', '$nalternatif', '$email', '$tlp')";
	mysqli_query($koneksi, $queryAlternatif);

	for($i = 1; $i<=3; $i++){
	$queryRelasi = "INSERT INTO tbl_relasi 
					VALUES ('','K$i', '$kalternatif', '0')";
	mysqli_query($koneksi, $queryRelasi);
	}

	return mysqli_affected_rows($koneksi);
		
}

function alternatifHapus($kodealternatif){
	global $koneksi;
	mysqli_query ($koneksi, "DELETE FROM tbl_alternatif WHERE kode_alternatif = '$kodealternatif'");
	return mysqli_affected_rows($koneksi);
}


function alternatifUbah($data){
	global $koneksi;
	
	$kalternatif = $data["kode_alternatif"];
	$nip = $data["nip_alternatif"];
	$nalternatif = $data["nama_alternatif"];
	$email = $data["email_alternatif"];
	$tlp = $data["telepon_alternatif"];

	//query ubah data
	$queryAlternatif = "UPDATE tbl_alternatif SET
									kode_alternatif = '$kalternatif',
									nip_alternatif = '$nip',
									nama_alternatif = '$nalternatif',
									email_alternatif = '$email',
									telepon_alternatif = '$tlp'
									WHERE kode_alternatif = '$kalternatif';
								";

	mysqli_query($koneksi, $queryAlternatif);

	return mysqli_affected_rows($koneksi);
}


?>