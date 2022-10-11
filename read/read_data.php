<?php
    include "../connection.php";

    $id = rand(11,99);

    $nama_lengkap = htmlspecialchars($_POST['nama']);
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $insert = mysqli_query($koneksi, "INSERT INTO siswi SET id='$id',
    nama_lengkap='$nama_lengkap', kelas='$kelas', jurusan='$jurusan'");

    if($insert){
        $pesan = 'data berhasil masuk';
        echo "<script> alert('$pesan')
            window.location.replace('../index.php');
            </script>";
    } else {
        echo"gagal";
    }
?>