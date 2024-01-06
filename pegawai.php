<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
       <h1 class="h2">Pegawai</h1>
         </div> 
<h3>List Data Pegawai</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $tampil = mysqli_query($db, "select * from pegawai");
                            $no = 1;
                            while ($data = mysqli_fetch_array($tampil)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['posisi']; ?></td>
                                </tr>
                            <?php
                            $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
