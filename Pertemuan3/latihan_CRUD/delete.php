<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "DELETE FROM customers WHERE id=$id");
if($result){
    $message = "Berhasil menghapus customers";
}else {
    $message = "Gagal menghapus customer";
}

header("Location:index.php?message=".$message);
?>