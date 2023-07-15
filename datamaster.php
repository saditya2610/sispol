<!DOCTYPE html>
<?php
    include 'connect.php';
    require 'sideindex.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data User</h1>
                    <?php
                      if (isset($_POST['nama'])) {
                        echo $_POST['nama'];
                        echo '&nbsp; ';
                        echo $_POST['email'];
                        echo '&nbsp; ';
                        echo $_POST['username'];
                        echo '&nbsp; ';
                        echo $_POST['password'];
                        echo '&nbsp; ';
                        echo $_POST['level'];
                      }
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
    <!-- Load Datatable & Bootsrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="datatables/lib/css/dataTables.bootstrap.min.css"/>
  </head>
  <body>
    
      <div class="table-responsive">
        <a class="btn btn-primary"  href="isidatauser.php">Tambah User</a>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
              <th>Level</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include 'connect.php';
              $query = mysqli_query($connect,"select * from user");
              $no = 1;
              while ( $data = mysqli_fetch_array($query) ) {
                
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['username']; ?></td>
              <td><?php echo $data['password']; ?></td>
              <td><?php echo $data['level']; ?></td>
              <td>
              <a href='<?php echo "edit_user.php?id=" . $data['id_user'] ?>' class='btn btn-warning btn-sm'>Edit</a>
              <a href='<?php echo "delete_user.php?id=" . $data['id_user']?>' class='btn btn-danger btn-sm'>Hapus</a>
              </td>
            </tr>
            <?php } ?>
           
          </tbody>
        </table>        
      </div>
    </div>
    <!-- Load Jquery & Datatable JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script type="text/javascript" src="datatables/lib/js/dataTables.bootstrap.min.js"></script>
    <script>
    
    </script>
  </body>
</html>