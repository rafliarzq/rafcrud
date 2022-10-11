<?php
include "../connection.php";

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$update = mysqli_query($koneksi, "UPDATE siswi SET nama_lengkap='$nama_lengkap',kelas='$kelas',jurusan='$jurusan' WHERE id='$id'");
if($update){
    header("location: ../update.php");
} else{
    echo "gagal";
}