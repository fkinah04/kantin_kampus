<?php
    $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : '';
    include '../koneksi.php'; // 
    if($aksi=='insert'){
        if (isset($_POST['submit'])) {
            $id=$_POST['id'];
            $nama=$_POST['nama'];
            $posisi=$_POST['posisi'];
            $sql=mysqli_query($db,"INSERT INTO pegawai(id,nama,posisi) VALUES ('$id','$nama','$posisi')");
            if($sql){
                header('location:index.php?p=pegawai');
            }
            else{
                echo "Data gagal disimpan";
            }

        }
    }

    if($aksi=='hapus'){
        $sql=mysqli_query($db,"DELETE FROM pegawai WHERE id='$_GET[id_hapus]'");

        if ($sql) {
            header('location:index.php?p=pegawai');
        }
        else {
            echo 'Data gagal dihapus';
        }
    }

    if($aksi=='update'){
        if (isset($_POST['submit'])) {
            $sql=mysqli_query($db, "UPDATE pegawai SET
                id='$_POST[id]',
                nama='$_POST[nama]',
                posisi='$_POST[posisi]'
                 WHERE id='$_POST[id]'
            ");

            if($sql){
                header('location:index.php?p=pegawai');
            }
            else{
                echo "Data gagal disimpan";
            }
        }
    }
?>
    


