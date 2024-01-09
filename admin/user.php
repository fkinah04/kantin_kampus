<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User</h1>
</div>

<?php
    include '../koneksi.php'; 
    $proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
    switch ($proses) {
        case 'list':
?>
<h3>List Data User</h3>
     <a href="index.php?p=user&proses=input"  class="btn btn-primary" mb-3> Tambah Data </a> 
    <table class="table table-border table-striped" >
        <tr  bgcolor="yellow">
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>level</th>
            <th>Aksi</th>
        </tr>
    
        <?php 
            
            $tampil=mysqli_query($db,"select*from user");
            while ($data=mysqli_fetch_array($tampil)){
                ?>
                <tr>
                    
                    <td><?php echo $data['id']; ?> </td>  
                    <td><?php echo $data['username']; ?> </td>  
                    <td><?php echo $data['password']; ?> </td>  
                    <td><?php echo $data['email']; ?> </td>  
                    <td><?php echo $data['level']; ?> </td>   
                    <td>
                        <a href="proses_user.php?aksi=hapus&id_hapus=<?= $data['id'] ?>" onclick="return confirm('Yakin Akan MEnghapus Data .?')" class="btn btn-danger" ><i class="bi bi-trash-fill"></i>Hapus</a>
                        <a href="index.php?p=user&proses=edit&id_edit=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                <?php
                

            }
        ?>

    </table>
        </div>
<?php
    break;
    case 'input':

?>
        <div class="row">
            <div class="col-md-6">
            <h3>Form Data User</h3>
            <form action="proses_user.php?aksi=insert" method="post" >
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" name="id">
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  value="<?= $data['email'] ?>"class="form-control" id="email" name="email">
                </div>

                <div class="mb-1">
                    <label for="level" class="form-label">Level</label>
                </div>
                <div class="mb-3">
                    <input type="radio" class="form-check-input" id="level" name="level" value="Admin" checked> Admin
                    <input type="radio" class="form-check-input" id="level" name="level" value="User"> User
                </div>
                
                <div class="mb-3"> 
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    <input class="btn btn-warning" type="reset" name="reset" value="Reset">  
                </div>
            </form>
            </div>
        </div>
<?php
        break;
        
         case 'edit':
?>
    <?php 
             $ambil=mysqli_query($db,"SELECT * FROM user WHERE id='$_GET[id_edit]'");
             $data=mysqli_fetch_array($ambil);
        ?>
        <h3>Form Edit Data User</h3>
        <div class="row">
            <div class="col-md-6">
            <form action="proses_dosen.php?aksi=update" method="post" >
            <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" value="<?= $data['id'] ?>" disabled class="form-control" name="id">
                    <input type="hidden" value="<?= $data['id'] ?>" class="form-control" name="id_edit">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="<?= $data['username'] ?>" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" value="<?= $data['password'] ?>" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  value="<?= $data['email'] ?>"class="form-control" id="email" name="email">
                </div>
                <div class="mb-1">
                    <label for="level" class="form-label">Level</label>
                </div>
                <div class="mb-3">
                    <input type="radio" value="Admin" <?php if($data['level']=='Admin') echo 'checked'; ?> class="form-check-input" id="level_l" name="level" > Admin
                    <input type="radio" value="User" <?php if($data['level']=='User') echo 'checked'; ?> class="form-check-input" id="level_2" name="level" > User
                </div>

                <div class="mb-3">
                <div class="mb-3">
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </div>      
            </div>
            </form>
           
        </div>
 <?php
    break;
                
    }
?>