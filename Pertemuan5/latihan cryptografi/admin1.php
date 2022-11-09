<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/mu.png" width="70"></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toogle="collapse"
                    data-bs-target="#navbarmenu"
                    aria-controls="navbarmenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarmenu">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin.php">Shop</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="logout.php">Log Out</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input
                            class="form-control me-sm-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        >
                        <button class="btn btn-outline-succes my-2 my-sm-0 text-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/MUN.jpg"><rect width="100%" height="100%" fill="#777"></rect>
                    </img>
                    <div class="container">
                        <div class="carousel-caption text-start text-warning">
                            <h1>MANCHESTER UNITED</h1>
                            <p>THE RED DEVILS</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">MAN UNITED SHOP</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/LIV.jpg"><rect width="100%" height="100%" fill="#777"></rect>
                    </img>
                    <div class="container">
                        <div class="carousel-caption text-warning">
                            <h1>LIVERPOOL</h1>
                            <p>THE REDS</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">LIVERPOOL SHOP</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/ARS.jpg"><rect width="100%" height="100%" fill="#777"></rect>
                    </img>
                    <div class="container">
                        <div class="carousel-caption text-end text-warning">
                            <h1>ARSENAL</h1>
                            <p>THE GUNNERS</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">ARSENAL SHOP</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <footer class="bg-danger text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Form -->
              <section class="">
                <form action="">
                  <!--Grid row-->
                  <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                      <p class="pt-2">
                        <strong>Sign up for our newsletter</strong>
                      </p>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                      <!-- Email input -->
                      <div class="form-outline form-white mb-4">
                        <input type="email" id="form5Example29" class="form-control" />
                        <label class="form-label" for="form5Example29">Email address</label>
                      </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-auto">
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-outline-light mb-4">
                        Subscribe
                      </button>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </form>
              </section>
              <!-- Section: Form -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center bg-danger p-3">
              SINCE 2022:
              <a class="text-white" href="#">R9 SHOP</a>
            </div>
            <!-- Copyright -->
          </footer>
</body>
<script src="js/bootstrap.min.js"></script>
</html>