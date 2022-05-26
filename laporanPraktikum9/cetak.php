<?php
// koenksi ke config.php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Login</title>
</head>
<!-- pembuatan table untuk menampilkan data-->
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // mengambil data di table login yang sudah di buat di database
            $sql = "SELECT * FROM login";
            $query = mysqli_query($db, $sql);
            // memsukan data ke table
            while ($login = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $login['username'] . "</td>";
                echo "<td>" . $login['password_akun'] . "</td>";
            }
            ?>
        </tbody>

    </table>
    <br>
    <!-- menuju ke halaman indek.php -->
    <a href="index.php">Log Out</a>
</body>

</html>