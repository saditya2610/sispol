<!DOCTYPE html>
<?php
	include 'connect.php';
	require 'sideuser.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SisPoll</title>
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
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
			<div class="container text-center">
				<h1 class="masthead-heading text-uppercase mb-5">Selamat Datang di Sistem Polling</h1>
				<h2 style="color:White;" class="masthead-subheading mb-0"><em>Jl. Jenderal Sudirman No. 474, Kelurahan Jadirejo, Kecamatan Sukajadi, Kota Pekanbaru</em></a></h2>
			</div>
        </header>
	  
<div id="page-wrapper">
	<center><h4><b>KATEGORI SURVEI</b></h4></center>   
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-body">
							   <table width="50%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead> 
											<?php
												include 'connect.php';
												$query = mysqli_query($connect,"SELECT * from kategori");
												while ( $data = mysqli_fetch_array($query) ) { ?>
														<?php 
														$idk=$data['id_kategori'];
														$status=$data['status'];											
														

														if($status==0){?>
														<?php
														echo "
														<div class='col-lg-3 col-md-6'><br>
																<div class='panel-info class'>
																	<div class='panel-heading'>
																		<div class='row'>
																			<div class='col-xs-3'>
																				<i class='fa fa-tasks fa-5x'></i>
																			</div>
																			<div class='col-xs-9 text-center'>
																				<div>$data[nama_kategori]</div>
																			</div>
																		</div>
																	</div>
																</div>
															 
															</div>";

														} else {?>

														<?php 
															echo "
																<div class='col-lg-3 col-md-6'><br>
																<a href='penjelasan.php?id_kategorisend=$idk'>
																		<div class='panel panel-primary'>
																			<div class='panel-heading'>
																				<div class='row'>
																					<div class='col-xs-3'>
																						<i class='fa fa-tasks fa-5x'></i>
																					</div>
																					<div class='col-xs-9 text-center'>
																						<div>$data[nama_kategori]</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</a>
																	</div>";}?>
											<?php } ?>

																	</thead>
																</table>
															</div>
														</div>
													</div>
												</div>
										
											</div>
										</div>
										<section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Pelayanan</h3>
                    <h2 class="mb-5">Apa Saja yang ditawarkan di Sistem Polling</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>Praktis</strong></h4>
                        <p class="text-faded mb-0">Mempermudah Perusahaan menilai sebuah pelayanan kami</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                        <h4><strong>Evaluasi</strong></h4>
                        <p class="text-faded mb-0">Sebagai Bahan Evaluasi dari Pelayanan</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                        <h4><strong>Khusus</strong></h4>
                        <p class="text-faded mb-0">
                            Pengguna Yang memakai hanya dari Perusahaan yang sudah bekerja sama dinas Perhubungan Provinsi Riau
                            <i class="fas fa-heart"></i>
                            SISPOLL
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                        <h4><strong>Hasil Terbaik</strong></h4>
                        <p class="text-faded mb-0">Memberikan Masukan agar Kualitas Pelayanan kami tetap terbaik</p>
                    </div>
                </div>
            </div>
        </section>
<!-- Footer-->
<footer class="footer text-center" id="contact">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Surya Aditya 2022</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

			


					
		
	


</body>
</html>
