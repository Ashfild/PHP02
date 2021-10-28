<?php

include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: view.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa SMK TELKOM PURWOKERTO</title>
</head>

<body>
    <header>
        <h3>Edit Data Siswa</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nis">NIS: </label>
            <input type="number" name="nis" placeholder="Edit NIS anda" value="<?php echo $siswa['nis'] ?>" />
        </p>
        <p>
            <label for="nama_siswa">Nama: </label>
            <input type="text" name="nama_siswa" placeholder="Edit nama anda" value="<?php echo $siswa['nama_siswa'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="id_jurusan">ID Jurusan: </label>
            <input type="number" name="id_jurusan" placeholder="Edit id jurusan anda" value="<?php echo $siswa['id_jurusan'] ?>" />
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'Rekayasa Perangkat Lunak') ? "selected": "" ?>>Rekayasa Perangkat Lunak</option>
                <option <?php echo ($jurusan == 'Teknik Komputer dan Jaringan') ? "selected": "" ?>>Teknik Komputer dan Jaringan</option>
                <option <?php echo ($jurusan == 'Teknik Jurusan Akses') ? "selected": "" ?>>Teknik Jurusan Akses</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
    </form>
    <br>
    <a href="index.php">Kembali Ke Halaman Utama?</a>

    </body>
</html>