<?php

if(isset($_POST[submit])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once('config.php');

    $result = mysqli_query($conn_db, "INSERT INTO users(username,gender,email,password,created_at) VALUES('$username','$gender','$password','$created')");

    echo "Users ".$username." added successfully.<a href
}