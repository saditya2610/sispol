<?php
include "connect.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM user WHERE id_user ='$id'");
    if($query==true){?>
        <script language="javascript">alert("Berhasil Menghapus User");</script>
        <script>document.location.href='datamaster.php';</script>	
    <?php	
        } else{
    ?>
            <script language="javascript">alert("Gagal Menghapus User");</script>
            <script>document.location.href='datamaster.php';</script>
    <?php
        }
    }
?>