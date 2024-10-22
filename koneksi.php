<?php
    $servername = "localhost";
    $dbname = "db_bkpsdm";
    $username = "root";
    $password = "admin123";

    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if(!$koneksi){
        die("Koneksi Gagal :".mysqli_connect_error());
    }
?>