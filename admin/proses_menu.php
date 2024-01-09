<?php

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';
include '../koneksi.php'; //
if($aksi == 'insert') {
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        $errors = [];

        if (isset($_FILES['gambar'])) {
            $target_dir = "../img/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $errors[] = "File bukan gambar.";
                $uploadOk = 0;
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
                $errors[] = "Maaf, Hanya format JPG, JPEG, PNG & GIF yang bisa di masukkan.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                $errors[] = "Maaf, gambar belum ter-Upload";
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    $filename = htmlspecialchars(basename($_FILES["gambar"]["name"]));
                } else {
                    $errors[] = "Gagal, Meng-upload gambar";
                }
            }
        } else {
            $errors[] = 'Gambar tidak boleh kosong';
        }

        if (count($errors) <= 0 && strlen($filename) > 0) {

            $gambar = $filename;

            $harga = $_POST['harga'];
            $sql = mysqli_query($db, "INSERT INTO menu(id,nama,gambar,deskripsi,harga) VALUES ('$id','$nama','$gambar','$deskripsi','$harga')");
            if($sql) {
                header('location:index.php?p=menu');
            } else {
                echo "Data gagal disimpan";
            }

        } else {
            var_dump($errors);
        }

    }
}

if($aksi == 'hapus') {
    $sql = mysqli_query($db, "DELETE FROM menu WHERE id='$_GET[id_hapus]'");

    if ($sql) {
        header('location:index.php?p=menu');
    } else {
        echo 'Data gagal dihapus';
    }
}

if($aksi == 'update') {
    if (isset($_POST['submit'])) {

        $errors = [];

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $target_dir = "../img/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $errors[] = "File bukan gambar.";
                $uploadOk = 0;
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
                $errors[] = "Maaf, Hanya format JPG, JPEG, PNG & GIF yang bisa di masukkan.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                $errors[] = "Maaf, gambar belum ter-Upload";
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    $filename = htmlspecialchars(basename($_FILES["gambar"]["name"]));
                } else {
                    $errors[] = "Gagal, Meng-upload gambar";
                }
            }
        } else {
            $errors[] = 'Gambar tidak boleh kosong';
        }

        if (count($errors) <= 0 && strlen($filename) > 0) {

            $gambar = $filename;

            $sql = mysqli_query($db, "UPDATE menu SET
                id='$_POST[id]',
                nama='$_POST[nama]',
                gambar='$gambar',
                deskripsi='$deskripsi',
                harga='$_POST[harga]'
                 WHERE id='$_POST[id]'
            ");

            if($sql) {
                header('location:index.php?p=menu');
            } else {
                echo "Data gagal disimpan";
            }

        } else {
            $sql = mysqli_query($db, "UPDATE menu SET
                id='$_POST[id]',
                nama='$_POST[nama]',
                deskripsi='$_POST[deskripsi]',
                harga='$_POST[harga]'
                 WHERE id='$_POST[id]'
            ");

            if($sql) {
                header('location:index.php?p=menu');
            } else {
                echo "Data gagal disimpan";
            }
        }

    }
}