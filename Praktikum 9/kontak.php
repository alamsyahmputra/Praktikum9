<!DOCTYPE html>
<html>
<head>
 <title>Formulir Kontak</title>
</head>
<body>
 <header>
 <h3>Formulir Kontak</h3>
 </header>
 <!-- mengkoneksikan kw simpan_kontak.php -->
 <form action="simpan_kontak.php" method="POST">
 <!-- pembuatan form pengimputan antara lain ada nama,jenis kelamin,email,alamat,kota, pesan-->
 <fieldset>
 <p>
 <label for="Nama">Nama: </label>
 <input type="text" name="Nama" placeholder="Nama Panjang" />
 </p>
 <p>
 <label for="Jkel">Jenis Kelamin: </label>
 <input type="text" name="Jkel" placeholder="Jenis Kelamin" />
 </p>
 
 <p>
 <label for="Email">Email: </label>
 <input type="text" name="Email" placeholder="Email" />
 </p>
 <p>
 <label for="Alamat">Alamat: </label>
 <input type="text" name="Alamat" placeholder="Alamat" />
 </p>
 <label for="Kota">Kota: </label>
 <input type="text" name="Kota" placeholder="Kota" />
 </p>
 <p>
 <label for="Pesan">Isi: </label>
 <textarea name="Pesan"></textarea>
 </p>
 
 <p>
 <input type="submit" value="Simpan" name="simpan" />
 </p>
 </fieldset>
 </form>
 </body>
</html>