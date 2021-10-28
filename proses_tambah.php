<?php

include("koneksi.php");

if(isset($_POST['tambah'])){

    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $ij = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO data_siswa (nis, nama_siswa, jenis_kelamin, alamat, id_jurusan, jurusan) VALUE ('$nis', '$nama', '$jk', '$alamat', '$ij', '$jurusan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>