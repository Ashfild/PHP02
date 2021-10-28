<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa SMK TELKOM PURWOKERTO</title>
</head>

<body>
    <header>
        <h3>Tambah Data</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nis">NIS: </label>
            <input type="number" name="nis" placeholder="Silahkan isi NIS anda" />
        </p>
        <p>
            <label for="nama_siswa">Nama: </label>
            <input type="text" name="nama_siswa" placeholder="Silahkan isi nama anda" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="id_jurusan">ID Jurusan: </label>
            <input type="number" name="id_jurusan" placeholder="Silahkan isi id jurusan anda" />
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan">
                <option>Rekayasa Perangkat Lunak</option>
                <option>Teknik Komputer dan Jaringan</option>
                <option>Teknik Jurusan Akses</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>
    <br>
    <a href="index.php">Kembali Ke Halaman Utama</a>

    </body>
</html>