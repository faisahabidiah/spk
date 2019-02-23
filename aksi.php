<?php 

session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

require_once 'database/koneksi.php'; //require fungsi untuk memanggil atau menyatukan halaman lain

/*LOGIN*/
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if ($password == $row["password"]) {

			//set session

			$_SESSION["login"] = true;

			header("Location: index.php");
			
		}
	}

	$error = true;
}



/*KRITERIA*/



?>
