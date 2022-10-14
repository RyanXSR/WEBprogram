<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke project1 Berhasil <br>";
$query = mysqli_query($connect, "SELECT * FROM guru");
if (!$query) {
    echo ("Error query ".mysqli_error($connect));
}else{
    $num_of_rec = mysqli_num_rows($query);
    echo "Number of record = ".$num_of_rec;
}
mysqli_close($connect);