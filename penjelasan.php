<!DOCTYPE html>
<?php 
	include'connect.php';
	require 'sideuser.php';
 	$id_kategorisend=$_GET['id_kategorisend'];
?>

<html lang="en">
<head>
  <title>Penjelasan Polling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <link type="text/css" href="css/css.css" rel="stylesheet">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styless.css" rel="stylesheet" />
</head>

<body id="page-top">
        <!-- Navigation-->
				
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">SisPoll</a></li>
                <li class="sidebar-nav-item"><a href="pageUser.php">Home</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
				<li class="sidebar-nav-item"><a href="index.php">Login</a></li>
				<li class="sidebar-nav-item"><a href="logoutProses.php">Logout</a></li>
            </ul>
			
        </nav>
<div id="page-wrapper">
<?php include 'navbar.php'; ?>
			<div class="container">
			<center>
			<h3 style="text-transform: uppercase;">
					<b> 
						<?php 
							include 'connect.php'; 
							$query = mysqli_query($connect,"select nama_kategori from kategori WHERE id_kategori='$id_kategorisend'");
							while ( $data = mysqli_fetch_array($query) ) { ?>
								<?php 
									$kategori = $data ['nama_kategori']; 
									echo "survei <br><br> $kategori </br></br>";
								?>
						<?php } ?>
					</b>
				</h3>
			</center>


			<div class="panel-group">
				<div class="panel panel-info">
					<div class="panel-heading">
					<center>Penjelasan Setiap Komponen Pertanyaan</center></div>
							<?php
								include 'connect.php';
								$query = mysqli_query($connect,"SELECT persyaratan from kategori WHERE id_kategori='$id_kategorisend'");
								while ( $data = mysqli_fetch_array($query) ) { ?>
									<?php 
										$penjelasan=$data['persyaratan'];
											  echo"				  
												<div class='row'>
												<div class='col-lg-12'>
												<div class='panel panel-default'>
													<div class='panel-heading'>
														<div class='panel-body'>
														   <table width='80%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
																<thead><h5>$penjelasan</h5></thead>
															</table>
														</div>
													</div>
												</div>
												</div>
												</div>
											</div>"; ?>
									<?php } ?>	

							<br></br>
								<div class="container">
									<center><a href='formresponden.php?id_kategorisend=<?php echo $id_kategorisend;?>' type="submit" class="btn btn-info" value="Selanjutnya"> LANJUT </a></center>
								</div>
							<div class="panel-body"></div>
				</div>				
			  </div>
			</div>

<footer class="container-fluid text-center">
  <center><h6><b class="copyright">~ copyright © 2022 Surya Aditya GD</b></h6></center>
  
</footer>
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>
