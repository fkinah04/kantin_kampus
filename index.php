<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Kantin Kampus</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="container">
            <div class="placeholder">
                <div class="parallax-window" data-parallax="scroll" data-image-src="img/Politeknik-Negeri-Padang.jpg">
                    <div class="tm-header">
                        <div class="row tm-header-inner">
                            <div class="col-md-6 col-12">
                                <!-- <img src="img/Politeknik-Negeri-Padang.jpg" alt="Logo" class="tm-site-logo" />  -->
                                <div class="tm-site-text-box">
                                    <h1 class="tm-site-title">Kantin Kampus</h1>
                                    <h6 class="tm-site-description">Politeknik Negeri Padang</h6>
                                </div>
                            </div>
                            <nav class="col-md-6 col-12 tm-nav">
                                <ul class="tm-nav-ul">
                                    <li class="tm-nav-li"><a href="index.php"
                                            class="tm-nav-link <?php print(empty($_GET['p'])) ? 'active' : '' ?>">Home</a>
                                    </li>
                                    <li class="tm-nav-li"><a href="index.php?p=mhs"
                                            class="tm-nav-link <?php print(!empty($_GET['p']) && $_GET['p'] == 'mhs') ? 'active' : '' ?>">Mahasiswa</a>
                                    </li>
                                    <li class="tm-nav-li"><a href="index.php?p=menu"
                                            class="tm-nav-link <?php print(!empty($_GET['p']) && $_GET['p'] == 'menu') ? 'active' : '' ?>">Menu</a>
                                    </li>
                                    <li class="tm-nav-li"><a href="index.php?p=pegawai"
                                            class="tm-nav-link <?php print(!empty($_GET['p']) && $_GET['p'] == 'pegawai') ? 'active' : '' ?>">Pegawai</a>
                                    </li>
                                    <li class="tm-nav-li"><a href="index.php?p=supplier"
                                            class="tm-nav-link <?php print(!empty($_GET['p']) && $_GET['p'] == 'supplier') ? 'active' : '' ?>">Supplier</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <?php

              include("koneksi.php");
                                            $p = isset($_GET['p']) ? $_GET['p'] : 'home'; // ternary
                                            if ($p == 'home') {
                                                include 'home.php';
                                            }
                                            if ($p == 'mhs') {
                                                include 'mahasiswa.php';
                                            }
                                            if ($p == 'pegawai') {
                                                include 'pegawai.php';
                                            }
                                            if ($p == 'supplier') {
                                                include 'supplier.php';
                                            }
                                            if ($p == 'menu') {
                                                include 'menu.php';
                                            }

                                            ?>
        </div>
    </main>
    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2024 Kantin Kampus | Design: <a rel="nofollow" href="https://templatemo.com">Fitri
                Sakinah</a></p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handle click on paging links
        $('.tm-paging-link').click(function(e) {
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
    new DataTable('#example');
    </script>
</body>

</html>