<?php
    $host     = "10.0.0.45";
    $username = "admin";
    $password = "Admin123!";
    $database = "ajc";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
