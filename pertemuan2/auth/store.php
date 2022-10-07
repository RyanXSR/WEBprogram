<?php
//session_start();
//if(!isset($_SESSION['username'])){
//    header('Location:login-page.php');
//}
?>
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>admin page</title>
    </head>
    <body>
        <h1><p align=center>Selamat datang <?= $_SESSION['username']; ?>!!!</p></h1>
        <p align=center>Kamu berada di page <b>Admin</b></p>
        <br><h3><p align=center><a href='logout.php'>Logout</a></p></h3>
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PanPan Shop</title>
</head>

<body  style="background-image: url(https://daftarprakerja.com/wp-content/uploads/2020/12/pexels-william-matte-3768005.jpg); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;">
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: rgb(130, 235, 177);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/pan-removebg-preview.png" alt="" width="30" height="30"
                    class="d-inline-block align-text-top">
                PanPan Shop
            </a>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="img/home-removebg-preview.png" alt="" width="40" height="40"
                            class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="img/profile.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="img/mesage-removebg-preview.png" alt="" width="40" height="40"
                            class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="img/orders-removebg-preview.png" alt="" width="38" height="40"
                            class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="img/chart-removebg-preview.png" alt="" width="37" height="40"
                            class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href='logout.php'>
                            <div width="40" height="40">
                                Logout
                            </div>
                            <p></p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div class="row my-3" style="height: 500px">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card text-dark" style="width: 18rem;">
                <img src="img/item-shop/baju1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Baju Jianxun-on</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan :  Matt Babyterry</li>
                      <li>Ukuran : M, L, XL </li>
                      <li>Warna : Biru Tua, Marun, Abu-abu, Hijau Army</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6 style="color: rgb(0, 0, 0);">Rp :<p style="color: red;"><b>143.000-150.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card " style="width: 18rem;">
                <img src="img/item-shop/sweter.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sweater Campus</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan : BabyTerry</li>
                      <li>Ukuran : M, L, XL</li>
                      <li>Warna : Kuning, Putih, Hitam, Navy Blue</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6>Rp :<p style="color: red;"><b>132.000-145.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/item-shop/Taurus.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Taurus Shirt</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan : Katun</li>
                      <li>Ukuran : M, L, XL</li>
                      <li>Warna : Hitam, Maroon, Benhur, Navy, Hijau Mint</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6 style="color: white;">Rp :<p style="color: red;"><b>154.000-169.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        </div>
      </div>
      <div class="row my-3" style="height: 200px;">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card-light text-dark" style="width: 18rem;">
            </div>
        </div></div>
      <div class="row my-3" style="height: 500px">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card text-dark" style="width: 18rem;">
                <img src="img/item-shop/baju1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Baju Jianxun-on</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan :  Matt Babyterry</li>
                      <li>Ukuran : M, L, XL </li>
                      <li>Warna : Biru Tua, Marun, Abu-abu, Hijau Army</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6 style="color: rgb(0, 0, 0);">Rp :<p style="color: red;"><b>143.000-150.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card " style="width: 18rem;">
                <img src="img/item-shop/sweter.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sweater Campus</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan : BabyTerry</li>
                      <li>Ukuran : M, L, XL</li>
                      <li>Warna : Kuning, Putih, Hitam, Navy Blue</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6>Rp :<p style="color: red;"><b>132.000-145.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/item-shop/Taurus.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Taurus Shirt</h5>
                  <p class="card-text">
                    <h6>Deskripsi produk : </h6>
                    <ul>
                      <li>Bahan : Katun</li>
                      <li>Ukuran : M, L, XL</li>
                      <li>Warna : Hitam, Maroon, Benhur, Navy, Hijau Mint</li>
                      <li>Motif : Polos</li> </li>
                    </ul>
                    <h6 style="color: white;">Rp :<p style="color: red;"><b>113.000-145.000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        </div>
      </div>
      <div class="row my-3" style="height: 200px;">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card-light text-dark" style="width: 18rem;">
            </div>
        </div></div>
<!-- footer -->
      <div class="footer">
        <footer class="text-center text-lg-start bg-light text-muted">
          <!-- Section: Social media -->
          <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
        
            <!-- Right -->
            <div>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-google"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-linkedin"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fa fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->
        
          <!-- Section: Links  -->
          <section class="">
            <div class="container">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 ">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                  <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
                  <p>
                    <i class="fa fa-envelope me-3"></i>
                    info@example.com
                  </p>
                  <p><i class="fa fa-regular fa-phone"></i> + 01 234 567 88</p>
                  <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->
        
          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="#">Ryanka</a>
          </div>
          <!-- Copyright -->
        </footer>
        </div>
      
        <!-- Footer -->
        
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      </div>
</body>
<footer>
    
</footer>

</html>