<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa SMK TELKOM PURWOKERTO</title>
</head>
<body>
    <h1>Pencarian Data Siswa</h1>
    <form action="hasilsearch.php" method="post">
        <select name="kolom">
            <option value="nama_siswa">Nama: </option>
        </select>
        <input type="text" name="cari">
        <input type="submit" value="cari">

    </form>
    <br>
    <a href="index.php">Kembali Ke Halaman Utama?</a>
</body>
</html>