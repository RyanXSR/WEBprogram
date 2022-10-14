<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke project1 Berhasil <br>";
$query = mysqli_query($connect, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
if (!$query) {
    echo ("Error query ".mysqli_error($connect));
}
$data = mysqli_fetch_row($query);
print_r($data);
mysqli_close($connect);