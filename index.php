<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location:http://localhost/admin/login.php");
    exit;
}
require_once 'database/koneksi.php';
require_once("include/header.php");


if (isset($_GET['pesan'])) {
  $pesan = $_GET['pesan'];
  if ($pesan == "input") {
      echo "Data berhasil di input. ";
  }elseif ($pesan == "update") {
      echo "Data berhasil di update. ";
  }elseif ($pesan == "hapus") {
      echo "Data berhasil di hapus";
  }
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
      </h1>
    </section>

    <div class="entry-body" >
      <img src="favicon.jpeg" width="200px" height="200px" class="img-circle" alt="Admin Mukti" style="display: block;margin: 0 auto;">
      <h3 class="entry-title" align="center">Selamat Datang Di Mukti Marcomm Sedaya</h3>  
    </div>
<?php

require_once("include/footer.php");
?>