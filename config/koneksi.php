<?php
    //Data Kredential DB
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lapor_diri";
    $domain = "localhost/lapordiri/";

    //Fungsi koneksi ke Database
    $koneksi = mysqli_connect($hostname,$username,$password,$dbname);

    //cek koneksi
    if(!$koneksi) {
        echo "<h2>Koneksi Database Gagal : " . mysqli_connect_error() . "</h2>";
    }
    else {;
    }
?>