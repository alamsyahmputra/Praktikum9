<?php
//Deklarasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_login";

//Buat Koneksi
$db = mysqli_connect($servername, $username, $password, $dbname);

//Cek Koneksi
if (!$db) {
    die("Connection failed : " . mysqli_connect_error());
}
?>