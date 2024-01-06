<?php
    $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : '';
    include '../koneksi.php'; // 
    if($aksi=='insert'){
        if (isset($_POST['submit'])) {
            $id=$_POST['id'];
            $nama=$_POST['nama'];
            $harga=$_POST['harga'];
            $sql=mysqli_query($db,"INSERT INTO menu(id,nama,harga) VALUES ('$id','$nama','$harga')");
            if($sql){
                header('location:index.php?p=menu');
            }
            else{
                echo "Data gagal disimpan";
            }

        }
    }

    if($aksi=='hapus'){
        $sql=mysqli_query($db,"DELETE FROM menu WHERE id='$_GET[id_hapus]'");

        if ($sql) {
            header('location:index.php?p=menu');
        }
        else {
            echo 'Data gagal dihapus';
        }
    }

    if($aksi=='update'){
        if (isset($_POST['submit'])) {
            $sql=mysqli_query($db, "UPDATE menu SET
                id='$_POST[id]',
                nama='$_POST[nama]',
                harga='$_POST[harga]'
                 WHERE id='$_POST[id]'
            ");

            if($sql){
                header('location:index.php?p=menu');
            }
            else{
                echo "Data gagal disimpan";
            }
        }
    }
?>
    


