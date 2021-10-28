<?php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$link = mysqli_connect("localhost","root","","db_siswa");
$hasil=mysqli_query($link,"select * from data_siswa where $kolom like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while($baris=mysqli_fetch_array($hasil))
{
    echo "NIS :";
    echo $baris[0];
    echo "Nama :";
    echo $baris[1];
    echo "Jenis Kelamin :";
    echo $baris[2];
    echo "Alamat :";
    echo $baris[3];
}