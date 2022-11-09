<?php
session_start();
// cek username
if(isset($_SESSION['username'])){
    header('Location:store.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Login page</title>
    </head>
    <body>
        <!-- Pastikan action menuju ke auth.php dan method POST -->
        <section class="jumbotron text-center">
        <img src="img/pan-removebg-preview.png" alt="logo" width="200" >
        <h1 class="display-4"><b>Panpan Shop</b></h1>
        <br>
        <p>Anda harus login sebelum anda dapat masuk ke website<br>
          panpanshop.com, jika anda belum punya akun silahkan anda<br> 
          melakukan pendaftaran pada tombol "Daftar Sekarang"<br>
          yang ada Pada menu login</p>
        <br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Login
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,229.3C320,235,400,181,480,170.7C560,160,640,192,720,224C800,256,880,288,960,277.3C1040,267,1120,213,1200,192C1280,171,1360,181,1400,186.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="myform bg-dark">
                <h1 class="text-center">Login</h1>
                <form action="index.php" method="POST">
                    <div class="mb-3 mt-4">
                        <label for="username" class="form-label">Username</label>
                        <input name="username" type="text" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-light mt-3" value="login">LOGIN</button>
                        <p>Pengguna Baru? <a href="#">Daftar Sekarang</a></p>
                        </form>
                    </div>
            </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>