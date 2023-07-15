<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>
<div class="kotak_login">
<center>
    <p class="tulisan_login">Silahkan Daftar Akun</p>
    <img src="img/logo_polling.png" height="180" width="180" >
    <form action="cek_login.php" method="post">
<form action="" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
    </div>
    <div class="form-group">
        <label for="nama">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="nama">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">
        <label for="nama">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="nama">Konfirmasi Password</label>
        <input type="password" class="form-control" name="konfirmasi_password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="nama">Level</label>
        <select class="form-control" name="level" required>
            <option value="admin">Admin</option>
            <option value="perusahaan">Perusahaan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success" name="register_submit">Simpan</button>
</form>


<?php


//setelah klik
if(isset($_GET['register_submit'])){

//koneksi sql
$connect = mysqli_connect("localhost","root","","ikmlapan")
or die(mysqli_connect_error());


    // tampung value
    $nama = mysqli_real_escape_string($connect, trim($_POST['nama']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $username = mysqli_real_escape_string($connect, trim($_POST['username']));
    $password = mysqli_real_escape_string($connect, trim($_POST['password']));
    $konfirmasi_password = mysqli_real_escape_string($connect, trim($_POST['konfirmasi_password']));
    $level = mysqli_real_escape_string($connect, trim($_POST['level']));


//cek apakah konfirmasi password benar
if($password == $konfirmasi_password){
    //redirect
    header('location : index.php?konfirmasipassword-failed');
} else {
    // proses insert/register
    $query = "INSERT INTO user VALUES ('','$nama','$email','$username','$password','$level')";
    $hasil = mysqli_query($connect, $query);
    if($hasil){
        header('location : index.php?pesan=berhasil');
    } else {
        header('location : index.php?pesan=gagal');
    }
}
}   

?>