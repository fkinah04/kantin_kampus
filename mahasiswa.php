<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<div style="padding: 100px;">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mahasiswa</h1>
    </div>
    <h3>List Data Mahasiswa</h3>
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php

                            $tampil = mysqli_query($db, "select * from mahasiswa");
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) {
                ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>