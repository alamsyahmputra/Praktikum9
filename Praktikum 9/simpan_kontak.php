<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama = $_POST['Nama'];
    $jkel = $_POST['Jkel'];
    $email = $_POST['Email'];
    $alamat = $_POST['Alamat'];
    $kota = $_POST['Kota'];
    $pesan = $_POST['Pesan'];


    // buat query
    $sql = "INSERT INTO nama_kontak (Nama, Jkel, Email, Alamat, Kota, Pesan) VALUE ('$nama', '$jkel',  '$email', '$alamat', '$kota', '$pesan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: cetak.php?status=sukses');
    } 


} else {
    die("Akses dilarang...");
}

?>