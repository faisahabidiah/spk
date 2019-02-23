<?php 

require_once 'database/koneksi.php';
require_once 'aksi.php';

// session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Mukti Marcomm Sedaya</title>
	<link rel="favicon.jpeg" width="50px" height="50px" rel="icon">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">

 	<link rel="stylesheet" href="asset/css/AdminLTE.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<h1>Halaman Login</h1>
	</div>

<div class="login-box-body">

	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>

	<?php endif; ?>	

	<form action="" method="post">
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Username" name="username">
			<span class="glypghicon glypghicon-user form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Password" name="password">
		</div><br>
		<div class="row">
			<div class="col-xs-8">
			</div>
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Login</button>
			</div>
		</div>
	</form>
</div>
</div>
</body>
</html>

