<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Tambah Pelanggan</title>
    </head>

    <body>
        <br/><br/>
        <div class="card col-md-6 offset-md-3">
        
        <form action="add_process.php" method="POST" name="form1">
            <div>
                <br/>
            <a class="btn btn-success" href="index.php">Home</a>
            <br/><br/><br/>
            </div>
            <legend align="center">Form Tambah pelanggan</legend>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Kirim</button>
        </form>
    </div>
    </body>
</html>