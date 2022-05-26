<?php
//perintah memuat isi koneksi.php ke dalam file createtb.php 
include "config.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE login (
username VARCHAR (40) NOT NULL PRIMARY KEY,
password_akun VARCHAR(20))";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($db, $sql)) {
    echo "Table berhasil dibuat";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

//Menutup koneksi
mysqli_close($db);
?>