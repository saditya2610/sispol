<?php
include 'connect.php';
include 'sideindex.php';


if (isset($_POST['submit'])) {
    mysqli_query($connect , "INSERT INTO user (id_user, nama, email, username, password, level) VALUES ('','$_POST[nama]','$_POST[email]','$_POST[username]','$_POST[password]','$_POST[level]')");
    header("location:datamaster.php");

}
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
                            Tambah User
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
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="isidatauser.php" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" name="nama" placeholder="Nama .." required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Email .." required="required">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" placeholder="Username .." required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Password .." required="required">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <option value="admin">admin</option>
                                    <option value="perusahaan">perusahaan</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                </div>

                           
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
