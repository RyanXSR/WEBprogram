<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}
// echo "Koneksi Berhasil <br>";

?>