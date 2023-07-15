<?php
include 'connect.php';
include 'sideindex.php';





?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah User</title>


</head>

<body>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="pageAdmin.php">Kategori</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <?php 
                    include 'connect.php';
                    $query = mysqli_query($connect,"select * from user where id_user='$_GET[id]'");
                    $data = mysqli_fetch_array($query)
                ?>
<form role="form" method='POST' action='edit_user_proses.php'>
<div class="form-group">
    <label>Nama</label>
    <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
    <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
</div>
<div class="form-group">
    <label>Email</label>

    <input class="form-control" name="email" value="<?php echo $data['email']; ?>">
</div>
<div class="form-group">
    <label>Username</label>

    <input class="form-control" name="username" value="<?php echo $data['username']; ?>">
</div>
<div class="form-group">
    <label>Password</label>

    <input class="form-control" name="password" value="<?php echo $data['password']; ?>">
</div>
<div class="form-group">
    <label>Level</label>
    <select class="form-control" name="level">
    <option value="admin" <?= $data['level']=='admin' ? 'selected' : ''?>>admin</option>
    <option value="perusahaan" <?= $data['level']=='perusahaan' ? 'selected' : ''?>>perusahaan</option>
</select>
</div>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<button type="reset" name="reset" class="btn btn-default">Reset</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>