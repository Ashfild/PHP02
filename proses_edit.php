<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $ij = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE data_siswa SET nis='$nis', nama_siswa='$nama', jenis_kelamin='$jk', alamat='$alamat', id_jurusan='$ij', jurusan='$jurusan'  WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location:view.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>