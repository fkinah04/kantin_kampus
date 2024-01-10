<div class="row tm-gallery" style="margin-top: 60px;">
    <!-- gallery page 1 -->
    <div id="tm-gallery-page-pizza" class="tm-gallery-page">
    <?php
    function idr_format($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
    ?>
        <?php
        include("koneksi.php");
        $tampil = mysqli_query($db, "select * from menu");
        $no = 1;

        while ($data = mysqli_fetch_array($tampil)) {
            ?>

        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/<?= $data['gambar']?>" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title"><?= $data['nama']?></h4>
                    <p class="tm-gallery-description"><?= $data['deskripsi'] ?></p>
                    <p class="tm-gallery-price"><?= idr_format($data['harga']) ?></p>
                </figcaption>
            </figure>
        </article>
        <?php
             $no++;
        }
        ?>

    </div> 

</div> 