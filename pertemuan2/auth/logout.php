<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script> alert("Anda berhasil logout");
    window.location="store.php";</script>';
}else{
    header("location:store.php");
    exit();
}