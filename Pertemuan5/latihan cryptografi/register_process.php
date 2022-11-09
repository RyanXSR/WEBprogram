<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once('config.php');

    $result = mysqli_query($conn_db, "INSERT INTO users(username,gender,email,password,created_at)
    VALUES('$username','$gender','$email','$password','$created')");

    
    echo "Users ".$username." added successfully.<a href='login-page.php'>login<a>";
    if($result){
        header("refresh:2;url=login-page.php");
        echo 'Succes Register, You will be redirected to landing page in 2 secs.';
    }
}
?>