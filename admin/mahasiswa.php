<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mahasiswa</h1>
</div>
<?php
    $proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
    switch ($proses) {
        case 'list':
?>

    <h4>List Data Mahasiswa</h4>
    <a href="index.php?p=mhs&proses=input" class="btn btn-primary mb-3">Tambah data</a>
    <table class="table table-border table-striped">
        <tr  bgcolor="#99CCFF">
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php 
            $no=1;
            $tampil=mysqli_query($db,"select*from mahasiswa");
            while ($data=mysqli_fetch_array($tampil)){
        ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?php echo $data['nim']; ?> </td>  
            <td><?php echo $data['nama']; ?> </td>  
            <td><?php echo $data['kelas']; ?> </td>  
            <td><?php echo $data['jurusan']; ?> </td>  
            <td>
                <a href="proses_mahasiswa.php?aksi=hapus&id_hapus=<?=$data['nim'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger">Hapus</a>
                <a href="index.php?p=mhs&proses=edit&id_edit=<?=$data['nim'] ?>" class="btn btn-success">Edit</a>
            </td>
        </tr>

        <?php
            $no++;
            }
        ?>
    </table>
    <p>
        Klik <a href="index.php?p=mhs&proses=input"> di sini </a> untuk proses input data mahasiswa
    </p>

<?php
            # code...
            break;
        case 'input':
?>

    <h4>Form Mahasiswa</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_mahasiswa.php?aksi=insert" method="post" >
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" >
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div div class="mt-3 mb-1">
                <label for="kelas" class="form-label">Kelas</label>
                </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas1" value="2_TRPL">
                <label class="form-check-label" for="kelas1">2-TRPL</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas2" value="2_AK">
                <label class="form-check-label" for="kelas2">2-AK</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas3" value="2_TM">
                <label class="form-check-label" for="kelas2">2-TM</label>
            </div>
            <div div class="mt-3 mb-1">
            <label for="jurusan" class="form-label">Jurusan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="teknologi informasi" value="TI">
                <label class="form-check-label" for="Teknologi Informasi">Teknologi Informasi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="akuntansi" value="AK">
                <label class="form-check-label" for="akuntansi">Akuntansi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="teknik mesin" value="TM">
                <label class="form-check-label" for="teknik mesin">Teknik Mesin</label>
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
        $ambil=mysqli_query($db,"SELECT * FROM mahasiswa WHERE nim='$_GET[id_edit]'");
        $data=mysqli_fetch_array($ambil);
    ?>
    <h4>Form Edit Mahasiswa</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_mahasiswa.php?aksi=update" method="post" >
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?=$data['nim'] ?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'] ?>" >
            </div>
            <div div class="mt-3 mb-1">
                <label for="kelas" class="form-label">Kelas</label>
                </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas1" value="2_TRPL">
                <label class="form-check-label" for="kelas1">2-TRPL</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas2" value="2_AK">
                <label class="form-check-label" for="kelas2">2-AK</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelas" id="kelas3" value="2_TM">
                <label class="form-check-label" for="kelas2">2-TM</label>
            </div>
            <div div class="mt-3 mb-1">
            <label for="jurusan" class="form-label">Jurusan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="teknologi informasi" value="TI">
                <label class="form-check-label" for="Teknologi Informasi">Teknologi Informasi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="akuntansi" value="AK">
                <label class="form-check-label" for="akuntansi">Akuntansi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jurusan" id="teknik mesin" value="TM">
                <label class="form-check-label" for="teknik mesin">Teknik Mesin</label>
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