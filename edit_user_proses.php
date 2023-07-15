// koneksi database
<?php
include 'connect.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['submit'])) {
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


// update data ke database
mysqli_query($connect,"UPDATE user SET nama='$nama', email='$email', username='$username', password='$password', level='$level' WHERE id_user=$id");

// mengalihkan halaman kembali ke index.php
header("location:datamaster.php");
}
 
?>