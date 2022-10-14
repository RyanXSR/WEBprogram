<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke project1 Berhasil <br>";

$query_insert = mysqli_query($connect, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP, JURUSAN) 
VALUES('','Eni Widyawati','Kalijambe, Sragen','1989-04-18','57564','RPL')");
if(!$query_insert){
    echo("Error query = ".mysqli_error($connect));
}

mysqli_close($connect);
?>