<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data); //menghapus karakter atau spasi pada string
        $data = stripslashes($data); //menghapus atau menghilangkan karakter backslash
        $data = htmlspecialchars($data); //mengkonversi karakter tertentu menjadi karakter html
        return $data;
    }

    $username = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: index.php?error=Email tidak boleh kosong");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password tidak boleh kosong");
        exit();
    } else {
        //ambil data dari form index.php
        if (isset($_POST['login'])) {
            $email = $_POST['username'];
            $password = $_POST['password'];

            //query insert data formulir ke dalam database
            $sql = "INSERT login set email='$username', password_akun='$password'";
            $query = mysqli_query($db, $sql);

            //mengecek apakah query berhasil di insert
            if ($query) {
                //jika berhasil maka akan dialihkan ke halaman cetak.php
                header('location: cetak.php');
            } else {
                //jika gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
            }
        } else {
            die("Akses dilarang...");
        }
    }
} else {
    header("Location: form-login.php");
    exit();
}
?>