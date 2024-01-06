<?php
    $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : '';
    include '../koneksi.php'; // 
    if($aksi=='insert'){
        if (isset($_POST['submit'])) {
            $nim=$_POST['nim'];
            $nama=$_POST['nama'];
            $kelas=$_POST['kelas'];
            $jurusan=$_POST['jurusan'];
            $sql=mysqli_query($db,"INSERT INTO mahasiswa(nim,nama,kelas,jurusan) VALUES ('$nim','$nama','$kelas','$jurusan')");
            if($sql){
                header('location:index.php?p=mhs');
            }
            else{
                echo "Data gagal disimpan";
            }

        }
    }

    if($aksi=='hapus'){
        $sql=mysqli_query($db,"DELETE FROM mahasiswa WHERE nim='$_GET[id_hapus]'");

        if ($sql) {
            header('location:index.php?p=mhs');
        }
        else {
            echo 'Data gagal dihapus';
        }
    }

    if($aksi=='update'){
        if (isset($_POST['submit'])) {
            $sql=mysqli_query($db, "UPDATE mahasiswa SET
                nim='$_POST[nim]',
                nama='$_POST[nama]',
                kelas='$_POST[kelas]',
                jurusan='$_POST[jurusan]'
                 WHERE nim='$_POST[nim]'
            ");

            if($sql){
                header('location:index.php?p=mhs');
            }
            else{
                echo "Data gagal disimpan";
            }
        }
    }
?>
    }
}

