<?php
    $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : '';
    include '../koneksi.php'; // 
    if($aksi=='insert'){
        var_dump($_POST);
        if (isset($_POST['submit'])) {
            $id=$_POST['id'];
            $mhs_nim=$_POST['mhs_nim'];
            $menu_id=$_POST['menu_id'];
            $pegawai_id=$_POST['pegawai_id'];
            $jumlah=$_POST['jumlah'];
            $sql=mysqli_query($db,"INSERT INTO pembayaran(id,mhs_nim,menu_id,pegawai_id,jumlah) VALUES ('$id','$mhs_nim','$menu_id','$pegawai_id','$jumlah')");
            if($sql){
                header('location:index.php?p=pembayaran');
            }
            else{
                echo "Data gagal disimpan";
            }

        }
    }

    if($aksi=='hapus'){
        $sql=mysqli_query($db,"DELETE FROM pembayaran WHERE id='$_GET[id_hapus]'");

        if ($sql) {
            header('location:index.php?p=pembayaran');
        }
        else {
            echo 'Data gagal dihapus';
        }
    }

    if($aksi=='update'){
        if (isset($_POST['submit'])) {
            $sql=mysqli_query($db, "UPDATE pembayaran SET
                id='$_POST[id]',
                mhs_nim='$_POST[mhs_nim]',
                menu_id='$_POST[menu_id]',
                pegawai_id='$_POST[pegawai_id]',
                jumlah='$_POST[jumlah]'
                 WHERE id='$_POST[id]'
            ");

            if($sql){
                header('location:index.php?p=pembayaran');
            }
            else{
                echo "Data gagal disimpan";
            }
        }
    }
?>
    

