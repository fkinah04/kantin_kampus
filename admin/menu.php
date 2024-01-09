<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu</h1>
</div>
<?php
    $proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
    switch ($proses) {
        case 'list':
?>

    <h4>List Data Menu</h4>
    <a href="index.php?p=menu&proses=input" class="btn btn-primary mb-3">Tambah data</a>
    <table class="table table-border table-striped">
        <tr  bgcolor="#99CCFF">
            <th>No</th>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php 
            $no=1;
            $tampil=mysqli_query($db,"select*from menu");
            while ($data=mysqli_fetch_array($tampil)){
        ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?php echo $data['id']; ?> </td>  
            <td><?php echo $data['nama']; ?> </td>  
            <td><?php echo $data['harga']; ?> </td>  
            <td>
                <a href="proses_menu.php?aksi=hapus&id_hapus=<?=$data['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger">Hapus</a>
                <a href="index.php?p=menu&proses=edit&id_edit=<?=$data['id'] ?>" class="btn btn-success">Edit</a>
            </td>
        </tr>

        <?php
            $no++;
            }
        ?>
    </table>
    <p>
        Klik <a href="index.php?p=menu&proses=input"> di sini </a> untuk proses input data menu
    </p>

<?php
            # code...
            break;
        case 'input':
?>

    <h4>Form Menu</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_menu.php?aksi=insert" method="post" >
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" >
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" >
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
        $ambil=mysqli_query($db,"SELECT * FROM menu WHERE id='$_GET[id_edit]'");
        $data=mysqli_fetch_array($ambil);
    ?>
    <h4>Form Edit Menu</h4>
    <div class="row">
        <div class="col-md-6">
        <form action="proses_menu.php?aksi=update" method="post" >
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" value="<?=$data['id'] ?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'] ?>" >
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?=$data['harga'] ?>" >
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