<?php
    $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : '';
    include '../koneksi.php'; // 
    if($aksi=='insert'){
        if (isset($_POST['submit'])) {
            $id=$_POST['id'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $sql=mysqli_query($db,"INSERT INTO supplier(id,nama,alamat) VALUES ('$id','$nama','$alamat')");
            if($sql){
                header('location:index.php?p=supplier');
            }
            else{
                echo "Data gagal disimpan";
            }

        }
    }

    if($aksi=='hapus'){
        $sql=mysqli_query($db,"DELETE FROM supplier WHERE id='$_GET[id_hapus]'");

        if ($sql) {
            header('location:index.php?p=supplier');
        }
        else {
            echo 'Data gagal dihapus';
        }
    }

    if($aksi=='update'){
        if (isset($_POST['submit'])) {
            $sql=mysqli_query($db, "UPDATE supplier SET
                id='$_POST[id]',
                nama='$_POST[nama]',
                alamat='$_POST[alamat]'
                 WHERE id='$_POST[id]'
            ");

            if($sql){
                header('location:index.php?p=supplier');
            }
            else{
                echo "Data gagal disimpan";
            }
        }
    }
?>
    


