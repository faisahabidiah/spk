<?php 

isset($_SESSION) ? null : session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Mukti Marcom Sedaya</title>
  <link rel="icon" type="image/jpeg" href="favicon.jpeg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="asset/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" type="text/css" href="http://localhost/asset/css/jquery.dataTables.min.css">

  <script src="asset/jquery/jquery.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    
    //digunakan untuk membatasi tabel menjadi 25 data dan membuat tabel menjadi dinamis
    $(document).ready(function(argument) {
      
        $('.sidebar-menu').tree()
        $('.datatable').DataTable({
          pageLength: 25)
      });
    });
  </script>

  <style type="text/css">
    .aw{
      width: auto;
    }
    .page-header h1{
      margin-top: 0;
    }

  </style>

</head>
<body class="hold-transition login-page">
<div class="wrapper">
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><img src="favicon.jpeg"></span>
      <span class="logo-lg"><b>Admin </b><b>Mukti Marcomm Sedaya</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="hidden">
           <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="asset/img/logoMukti.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Mukti Marcomm Sedaya</p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li>
          <a href="kriteria.php">
            <i class="fa fa-th"></i> <span>Kriteria</span>
          </a>
        </li>
        <li>
          <a href="alternatif.php">
            <i class="fa fa-table"></i> <span>Alternatif</span>
          </a>
        </li>
        <li>
          <a href="penilaian.php">
            <i class="fa fa-area-chart"></i> <span>Penilaian</span>
          </a>
        </li>
        <li>
          <a href="hasil.php">
            <i class="fa fa-calendar"></i> <span>Hasil</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa-users red"> <span>User</span></i>
          </a>
        </li>
      </ul>
    </section>
  </aside>

<?php

require_once("include/footer.php");

?>
  