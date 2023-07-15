<!DOCTYPE html>
<?php
	include 'connect.php';
  require 'sideuser.php';
	$id_kategorisend=$_GET['id_kategorisend'];
?>

<html lang="en">
<head>
  <title>Polling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <link type="text/css" href="css/css.css" rel="stylesheet">
              <script>
              $(document).ready(function(){
                  $('[data-toggle="popover"]').popover();   
              });
              </script>

</head>
<body style="height: 100%">
<?php include 'navbar.php'; ?>


 <div class="container">
        <form class="well form-horizontal" action="prosesresponden.php?id_kategorisend=<?php echo $id_kategorisend;?>" method="post"  id="contact_form">
          <fieldset>
              <!-- Form Name -->
              <legend><center>Verifikasi Data Responden</center></legend>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Perusahaan</label>
                      <div class="col-md-4 inputGroupContainer"> 
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input data-toggle="popover" title="Opsional"  name="perusahaan" placeholder="Nama Perusahaan" class="form-control"  type="text" autofocus max="25" >
                            </div>
                      </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Lengkap</label>
                      <div class="col-md-4 inputGroupContainer"> 
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input data-toggle="popover" title="Opsional"  name="nama" placeholder="Nama Lengkap" class="form-control"  type="text" autofocus max="25" >
                            </div>
                      </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                   <label class="col-md-4 control-label">NIP/Data Lain</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                        <input name="nip"  data-toggle="popover" title="Opsional" placeholder="NIP/Data Lain" class="form-control"  type="text" autofocus max="25" required>
                      </div>
                      </div>
              </div>

              <div class="form-group">
                   <label class="col-md-4 control-label">Umur *</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="umur"  data-toggle="popover" title="wajib" placeholder="Umur (cth: 21)" class="form-control"  type="text" autofocus min="3" required>
                      </div>
                      </div>
              </div>

              <div class="form-group">
                   <label class="col-md-4 control-label">Tanggal Pengisian Polling *</label>  
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input id="date" name="date" placeholder="Tahun/Bulan/Tanggal"  data-toggle="popover" title="wajib" class="form-control"  type="text" autofocus min="3" required>
                      </div>
                      </div>
              </div>
              <!-- radio checks -->

               <div class="form-group">
                    <label class="col-md-4 control-label">Jenis Kelamin *</label>
                    <div class="col-md-4">
                        <div class="radio">
                          <label>
                          <input type="radio" name="jkelamin" value="1"/> Laki-laki
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="jkelamin" value="0"/> Perempuan
                          </label>
                        </div>
                    </div>
               </div>

              <!-- radio checks -->
               <div class="form-group">
                    <label class="col-md-4 control-label">Pendidikan Terakhir *</label>
                    <div class="col-md-4">
                        <div class="radio">
                          <label>
                          <input type="radio" name="pendidikan" value="SMA Sederajat"/> SLTA/SMA Sederajat
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pendidikan" value="D3-D4" /> D3-D4
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pendidikan" value="S1" /> Sarjana(S1)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pendidikan" value="S2 keatas" /> Master(S2) keatas
                          </label>
                        </div>
                    </div>
               </div>

               <!-- radio checks -->
               <div class="form-group">
                    <label class="col-md-4 control-label">Posisi di Perusahaan *</label>
                    <div class="col-md-4">
                    <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="Manajer" /> Pemilik Perusahaan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="Manajer" /> Manajer
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="HRD"/> HRD
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="Karyawan" /> Karyawan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="Magang" /> Supir
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="pekerjaan" value="Dan lain-lain"/> Dan lain-lain
                          </label>
                        </div>
                    </div>
               </div><br>

            <center>
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4">
                <button type="submit" class="btn btn-warning">Lanjutkan</button>
              </div>
            </div>
            </center>
          </fieldset>
          </form>
  </div><!-- /.container -->


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
     <!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


     
<footer>
  <center><h6><b class="copyright">~ copyright © 2022 Surya Aditya GD</b></h6></center>
</footer>

</body>
</html>
