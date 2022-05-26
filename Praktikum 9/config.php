<?php
// koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_alam";
$db = mysqli_connect($server, $user, $password, $nama_database);
// if apabila gagal terhubung ke database.
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>