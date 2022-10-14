<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke project1 Berhasil <br>";

$connect2 = mysqli_connect("localhost", "root","","project2");
if(!$connect2){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke Project2 Berhasil <br>";

?>