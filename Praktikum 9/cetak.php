<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Kontak</title>
</head>

<body>
    <header>
        <h3>List Kontak</h3>
    </header>
    <!--  mengambil data yang ada di file kontak.php yang akan di tampilkan di cetak.php-->
    <nav>
        <a href="kontak.php"></a>
    </nav>

    <br>
    <!-- membuat table -->
    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Pesan</th>
        </tr>
    </thead>
    <tbody>
            <!-- mengambil data yang ada di from nama_kontak-->
        <?php
        $sql = "SELECT * FROM nama_kontak";
        $query = mysqli_query($db, $sql);
            // data yang sudah di ambil dari form(table nama_kontak) di masukan ke dalam table
        while($kontak = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$kontak['id']."</td>";
            echo "<td>".$kontak['Nama']."</td>";
            echo "<td>".$kontak['Jkel']."</td>";
            echo "<td>".$kontak['Email']."</td>";
            echo "<td>".$kontak['Alamat']."</td>";
            echo "<td>".$kontak['Kota']."</td>";
            echo "<td>".$kontak['Pesan']."</td>";

         

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
        <!-- jumlah data yang sudah di masukan ke table-->
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>