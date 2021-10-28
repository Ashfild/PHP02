<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa SMK TELKOM PURWOKERTO</title>
</head>

<body>
    <header>
        <h3>Data Siswa</h3>
        <h1>SMK TELKOM PURWOKERTO</h1>
    </header>

    <h4>Menu</h4>
    <nav>
            <li><a href="tambah.php">Daftar</a></li>
			<br>
            <li><a href="view.php">List Data Siswa</a></li>
            <br>
            <li><a href="search.php">Cari Data Siswa</a></li>
    </nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Tambah Data Berhasil!";
            } else {
                echo "Tambah Data Gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html