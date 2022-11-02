<?php
$connect = mysqli_connect("localhost","root","","sekolah_ryan2");
if (!$connect) {
    echo mysqli_connect_error();
}