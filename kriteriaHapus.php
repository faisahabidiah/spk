<?php 

require 'database/service.php';

$kodekriteria = $_GET["kode_kriteria"];

if (kriteriaHapus($kodekriteria) > 0) {
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'kriteria.php';
			</script>";
}else{
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'kriteria.php';
			</script>";
}

 ?>