<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mahasiswa'); //membuka koneksi baru ke server mysql 
    if (isset($conn)) { //melakukan pengkondisian nilai benar (isset) 
        echo("Database Berhasil Terkoneksi"); 
    } else {
        die("Koneksi Gagal");
    }
?>
