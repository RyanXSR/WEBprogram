<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "SELECT * FROM customers WHERE id=$id");
if(!$result){
    header("Location:index.php");
}
while($customer_data = mysqli_fetch_array($result)){
    $name = $customer_data['name'];
    $email = $customer_data['email'];
    $phone = $customer_data['phone'];
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Edit Pelanggan</title>
    </head>

    <body>
        <br/><br/>
        <div class="card col-md-6 offset-md-3">
        
        <form action="edit_process.php" method="POST" name="update_user">
            <div>
                <br/>
            <a class="btn btn-success" href="index.php">Home</a>
            <br/><br/><br/>
            </div>
            <legend align="center">Form Edit pelanggan</legend>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="name" value=<?= $name ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="phone" name="phone" value=<?php echo $phone; ?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" class="btn btn-primary" name="update">Kirim</button>
        </form>
    </div>
    </body>
</html>