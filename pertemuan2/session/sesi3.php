<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>SESI 3</title>

</head>

<body>
    <?php
    //Mengubah isi dari variable sesi

    $_SESSION['nama'] = "ryan";

    echo "Variable sesi telah diubah";
    ?>
</body>
</html>