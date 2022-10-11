<?php
     include "../connection.php";
     $id=$_GET["id"];
 
     $delete = mysqli_query($koneksi, "DELETE FROM siswi WHERE id=$id");
     if($delete){
         header('location: ../delete.php');
     } else {
         echo "<script>alert('Gagal input data pendaftar')</script>";
     }
?>