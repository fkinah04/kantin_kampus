<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pegawai</h1>
</div>
<?php
    $proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
    switch ($proses) {
        case 'list':
?>

    <h4>List Data Mahasiswa</h4>
    <a href="index.php?p=pembayaran&proses=input" class="btn btn-primary mb-3">Tambah data</a>
    <table class="table table-border table-striped">
        <tr  bgcolor="#99CCFF">
            <th>No</th>
            <th>ID</th>
            <th>Mahasiswa ID</th>
            <th>Menu ID</th>
            <th>Pegawai ID</th>
            <th>Jumlah Pesanan</th>
        </tr>

        <?php 
            $no=1;
            $tampil=mysqli_query($db,"select*from pembayaran");
            while ($data=mysqli_fetch_array($tampil)){
        ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?php echo $data['id']; ?> </td>  
            <td><?php echo $data['mhs_id']; ?> </td>  
            <td><?php echo $data['menu_id']; ?> </td>  
            <td><?php echo $data['pegawai_id']; ?> </td>  
            <td><?php echo $data['jumlah']; ?> </td>  
            <td>
                <a href="proses_pembayaran.php?aksi=hapus&id_hapus=<?=$data['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger">Hapus</a>
                <a href="index.php?p=pembayaran&proses=edit&id_edit=<?=$data['id'] ?>" class="btn btn-success">Edit</a>
            </td>
        </tr>

        <?php
            $no++;
            }
        ?>
    </table>
    <p>
        Klik <a href="index.php?p=pembayaran&proses=input"> di sini </a> untuk proses input data Pegawai
    </p>

<?php
            # code...
            break;
        case 'input':
?>

    <h4>Form Pembayaran</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_pembayaran.php?aksi=insert" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" >
            </div>
            <div class="mb-1">
                <label for="mhs" class="form-label">Mahasiswa</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="mhs_id">
                <option selected>Pilih Mahasiswa</option>
                <?php 
                    $mhs=mysqli_query($db,"SELECT * FROM mahasiswa");
                    while ($data_mhs=mysqli_fetch_array($mhs)) {
                        echo "<option value=" . $data_mhs['id'] . ">" . $data_mhs['nim'] . " - " . $data_mhs['nama_mhs'] . "</option>";
                    }
                ?>
            </select>
            <div class="mb-1">
                <label for="menu" class="form-label">Menu</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="menu_id">
                <option selected>Pilih Menu</option>
                <?php 
                    $menu=mysqli_query($db,"SELECT * FROM menu");
                    while ($data_menu=mysqli_fetch_array($menu)) {
                        echo "<option value=" . $data_menu['id'] . ">" . $data_menu['id'] . " - " . $data_menu['nama_menu'] . "</option>";
                    }
                ?>
            </select>
            <div class="mb-1">
                <label for="pegawai" class="form-label">Pegawai</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="pegawai_id">
                <option selected>Pilih Pegawai</option>
                <?php 
                    $pegawai=mysqli_query($db,"SELECT * FROM pegawai");
                    while ($data_pegawai=mysqli_fetch_array($pegawai)) {
                        echo "<option value=" . $data_pegawai['id'] . ">" . $data_pegawai['pegawai'] . " - " . $data_pegawai['nama_pegawai'] . "</option>";
                    }
                ?>
            </select>
           
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" >
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>      
        </form>
        </div>
    </div>

<?php
            # code...
            break;
        case 'edit':
            # code...
?>

    <?php
        $ambil=mysqli_query($db,"SELECT * FROM pegawai WHERE id='$_GET[id_edit]'");
        $data=mysqli_fetch_array($ambil);
    ?>
    <h4>Form Edit Pembayaran</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_pembayaran.php?aksi=update" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" >
            </div>
            <div class="mb-1">
                <label for="mhs" class="form-label">Mahasiswa</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="mhs_id">
                <option selected>Pilih Mahasiswa</option>
                <?php 
                    $mhs=mysqli_query($db,"SELECT * FROM mahasiswa");
                    while ($data_mhs=mysqli_fetch_array($mhs)) {
                        echo "<option value=" . $data_mhs['id'] . ">" . $data_mhs['nim'] . " - " . $data_mhs['nama_mhs'] . "</option>";
                    }
                ?>
            </select>
            <div class="mb-1">
                <label for="menu" class="form-label">Menu</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="menu_id">
                <option selected>Pilih Menu</option>
                <?php 
                    $menu=mysqli_query($db,"SELECT * FROM menu");
                    while ($data_menu=mysqli_fetch_array($menu)) {
                        echo "<option value=" . $data_menu['id'] . ">" . $data_menu['id'] . " - " . $data_menu['nama_menu'] . "</option>";
                    }
                ?>
            </select>
            <div class="mb-1">
                <label for="pegawai" class="form-label">Pegawai</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="pegawai_id">
                <option selected>Pilih Pegawai</option>
                <?php 
                    $pegawai=mysqli_query($db,"SELECT * FROM pegawai");
                    while ($data_pegawai=mysqli_fetch_array($pegawai)) {
                        echo "<option value=" . $data_pegawai['id'] . ">" . $data_pegawai['pegawai'] . " - " . $data_pegawai['nama_pegawai'] . "</option>";
                    }
                ?>
            </select>
           
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" >
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
        </form>
        </div>
    </div>
    
<?php
            break;
    }
?>