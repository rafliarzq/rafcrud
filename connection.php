<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="apprf";

    $koneksi = mysqli_connect($host, $user, $pass, $database);
    if (!$koneksi){
        echo('sukses');
    }
?>