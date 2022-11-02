<?php
$connect = mysqli_connect("localhost", "root","","project1");
if(!$connect){
    die("Konesi Gagal : ".mysqli_connect_error());
}echo "Koneksi ke project1 Berhasil <br>";
$query = mysqli_query($connect, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
if (!$query) {
    echo ("Error query ".mysqli_error($connect));
}
echo "<br> Hasil Numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : ".$data[0]."<br>";
    print "NAMA LENGKAP : ".$data[1]."<br>";
    print "JURUSAN : ".$data[2]."<br>";
}
mysqli_close($connect);