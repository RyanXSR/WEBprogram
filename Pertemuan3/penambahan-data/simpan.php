<?php
//include koneksi database
include('koneksi.php');

//get data dari form
$nama           = $_POST['nama'];
$alamat = $_POST['alamat'];
$tl      = $_POST['tl'];
$nip      = $_POST['nip'];
$jurusan     = $_POST['jurusan'];

$query_insert = mysqli_query($connect, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP, JURUSAN) 
VALUES('','$nama','$alamat','$tl','$nip','$jurusan')");
if(!$query_insert){
    echo("Error query = ".mysqli_error($connect));
}

header("location: dataguru.php");

?>