<?php
    session_start();

    if ($_SESSION['login']==FALSE) {
        header('location:../login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Akademik</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" >



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .bg-navbar {
        background-color: #424769;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-navbar flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Kantin Kampus</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=mhs">
              <span data-feather="user" class="align-text-bottom"></span>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=menu">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=pegawai">
              <span data-feather="list" class="align-text-bottom"></span>
              Pegawai
            </a>
          </li>
          <?php
            if($_SESSION['level']=='admin'){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=user">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              User
            </a>
          </li>
          <?php
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=supplier">
              <span data-feather="layers" class="align-text-bottom"></span>
              Supplier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=pembayaran">
              <span data-feather="layers" class="align-text-bottom"></span>
              Pembayaran
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        include '../koneksi.php';
        $p=isset($_GET['p']) ? $_GET['p'] : 'dashboard'; // ternary
        if ($p=='dashboard') include 'dashboard.php';
        if ($p=='mhs') include 'mahasiswa.php';
        if ($p=='menu') include 'menu.php';
        if ($p=='pegawai') include 'pegawai.php';
        if ($p=='user') include 'user.php';
        if ($p=='login') include 'login.php';
        if ($p=='supplier') include 'supplier.php';
        if ($p=='pembayaran') include 'pembayaran.php';
        
        ?>

     
    </main>
  </div>
</div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../../js/dashboard.js"></script>
  </body>
</html>
