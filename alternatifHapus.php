<?php 

require 'database/service.php';

$kodealternatif = $_GET["kode_alternatif"];

if (alternatifHapus($kodealternatif) > 0) {
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'alternatif.php';
			</script>";
}else{
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'alternatif.php';
			</script>";
}

 ?>