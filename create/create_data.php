<?php
    include "../connection.php";

    $id = rand(10,99);
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $insert = mysqli_query($koneksi, "INSERT INTO siswi SET id='$id', nama_lengkap='$nama_lengkap', kelas='$kelas', jurusan='$jurusan'");
    
    if ($insert) {
        $pesan = 'data sudah masuk';
        echo "<SCRIPT> 
            alert('$pesan')
            window.location.replace('../index.php');
            </SCRIPT>";

}else{
    echo "gagal";
}
?>