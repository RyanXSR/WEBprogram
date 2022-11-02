<?php
include 'connection.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query_insert = mysqli_query($connect, "INSERT INTO siswa(NIS, nama_lengkap, ALAMAT, kelas, JURUSAN) 
VALUES('$nis','$nama','$alamat','$kelas','$jurusan')");

mysqli_query($connect, $query_insert);
echo '<script>alert("data Berhasil Disimpan");
            window.location="form-page.php";
      </script>';


mysqli_close($connect);