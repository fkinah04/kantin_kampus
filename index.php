<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Kampus</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <!-- navbar-->
<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kantin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=mhs">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=pegawai">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=supplier">Supplier</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<?php
include("koneksi.php");
    $p=isset($_GET['p']) ? $_GET['p'] : 'home'; // ternary
    if ($p=='home') include 'home.php';
    if ($p=='mhs') include 'mahasiswa.php';
    if ($p=='pegawai') include 'pegawai.php';
    if ($p=='supplier') include 'supplier.php';
    if ($p=='menu') include 'menu.php';
    
    
?>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
  new DataTable('#example');
</script>
</body>
</html>
