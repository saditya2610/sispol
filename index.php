<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>


<body>

</body>

<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
}

?>

<div class="kotak_login">
<center>
    <p class="tulisan_login">Silahkan login</p>
    <img src="img/logo_polling.png" height="180" width="180" >
    <form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

            <label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

            <input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
</center>
			
		</form>
		
	</div>
 
    </form>
</div>