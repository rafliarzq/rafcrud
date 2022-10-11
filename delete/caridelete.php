<?php
    include "../connection.php";

    if(isset($_GET['keyword'])) {
        $cari = $_GET['keyword'];
        $delete = mysqli_query($koneksi,"DELETE FROM siswi WHERE id='$cari'");
        if ($delete) {
            header("location: ../delete.php");
        }
        else {
            echo "<script>alert('Gagal'); location.href='../index.php';</script>";
        }
    }
   
?>