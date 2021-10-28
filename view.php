<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa SMK TELKOM PURWOKERTO</title>
</head>

<body>
    <header>
        <h3>List Data</h3>
    </header>

    <nav>
        <a href="tambah.php">Tambah?</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>ID Jurusan</th>
            <th>Jurusan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama_siswa']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['id_jurusan']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <br>
    <a href="index.php">Kembali Ke Halaman Utama?</a>

    </body>
</html>