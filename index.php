<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <title>Kape Para Sayo</title>
      <link rel="icon" type="image/x-icon" href="assets/logo/icon_01.png">    

      <link rel="stylesheet" href="css/styles.css">
      <script src="js/scripts.js"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-custom navbar-expand-lg fixed-top navbar shadow-lg">
      <div class="container d-flex justify-content-between">
        <div class="col-lg-2 col d-flex justify-content-between justify-content-lg-start align-items-center">
          <a class="navbar-brand" href="index.php#home">
            <img class="rounded-lg-3 d-block" style="height: 48px;" src="assets/logo/logo_01.png" alt="">
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="col-8 collapse navbar-collapse justify-content-center text-center" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Orders</a></li>
                <li><a class="dropdown-item" href="profile.php">Account Details</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="col-1 collapse navbar-collapse text-center justify-content-end" id="navbarCollapse">
          <?php
          if (isset($_SESSION["login"])) {
            
          echo '<div class="col-2 collapse navbar-collapse text-center justify-content-end" id="navbarCollapse">
              <button type="button" class="btn btn-outline-dark me-2"><a href="cart.php" style="text-decoration: none; color: #333533;">Cart</a></button>
              <button type="button" class="btn btn-outline-dark me-2"><a href="logout.php" style="text-decoration: none; color: #333533;">Logout</a></button>
              </div>';

          } else {
            
          echo '<div class="col-2 collapse navbar-collapse text-center justify-content-end" id="navbarCollapse">
                <button type="button" class="btn btn-outline-dark me-2"><a href="login.html" style="text-decoration: none; color: #333533;">Login</a></button>
                </div>';
          }
          ?>
        </div>
    </nav>
      
    <main class="container-fluid p-0">
      <div id="home" class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center">
        <div class="row p-0 align-items-center rounded-3 shadow-lg w-75 my-auto hero">
          <div class="col-lg-7 p-3 p-lg-5">
            <h1 class="display-4 fw-bold lh-1">Kape Para Sayo</h1>
          <p class="lead display-5 pt-lg-3">Your fresh cup of coffee, delivered.</p>
        </div>
        <div class="col-lg-5 p-0 shadow-lg rounded-3">
            <img class="rounded-lg-3 home-img d-block" src="assets/stock/coffee_01.jpg" alt="">
        </div>
        </div>
      </div>

      <div id="about" class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center">
        <div class="row p-0 align-items-center rounded-3 shadow-lg w-75 my-auto hero">
          <div class="col-lg-7 p-3 p-lg-5 ">
              <h1 class="display-4 fw-bold lh-1">Who are we?</h1>
              <p class="lead pt-lg-3">Kape Para Sayo is a coffee subscription business that sources locally roasted coffee beans from the Philippines. We believe that everyone deserves to enjoy a cup of fresh, flavorful coffee, and we are committed to providing our customers with the best possible coffee experience.</p>
            </div>
            <div class="col-lg-5 p-0 shadow-lg rounded-3">
                <img class="rounded-lg-3 home-img" src="assets/stock/roaster_01.jpg" alt="">
            </div>
          </div>
      </div>

      <div id="shop" class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center">
        <div class="row p-0 align-items-center rounded-3 shadow-lg w-75 my-auto hero">
          <div class="col-lg-7 p-3 p-lg-5">
              <h1 class="display-4 fw-bold lh-1">Our Selection</h1>
              <p class="lead pt-lg-3">We work with a variety of local coffee roasters to bring you a wide selection of single origin coffees and blends. We also offer a variety of subscription options so that you can choose the frequency and size of your deliveries to fit your needs.</p>
              
              <a href="products.php">
                <button type="button" class="btn btn-dark btn-lg px-4 mt-4 me-md-2 fw-bold">Buy Now!</button>
              </a>
            </div>
            <div class="col-lg-5 p-0 shadow-lg rounded-3">
                <img class="rounded-lg-3 home-img" src="assets/stock/beans_01.jpg" alt="">
            </div>
          </div>
      </div>

      <div id="contact" class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center">
        <div class="row p-0 align-items-center rounded-3 p-4 shadow-lg w-75 my-auto hero">
          <div class="col-lg-5 p-3 p-lg-5">
              <h1 class="display-4 fw-bold lh-1">Contact Us</h1>
          </div>
            
          <div class="col-lg-7 p-0rounded-3">
            <form method="post">
              <div class="mb-3">
                  <label for="name" class="form-label">Your Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
              </div>

              <div class="mb-3">
                  <label for="email" class="form-label">Your Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                  <label for="subject" class="form-label">Subject:</label>
                  <input type="text" class="form-control" id="subject" name="subject" required>
              </div>

              <div class="mb-3">
                  <label for="message" class="form-label">Your Message:</label>
                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
              </div>

              <button type="submit" class="btn btn-dark">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <footer class="py-3 shadow-lg">
        <div class="container d-flex justify-content-center align-items-center">
          <div class="row row-cols-1">
            <div class="col d-flex justify-content-center">
              <a href="index.php#home">
                <img class="rounded-lg-3" style="height: 48px;" src="assets/logo/logo_01.png" alt="">
              </a>
            </div>
            <p class="col mb-0 text-body-secondary text-center">© 2023 Kape Para Sayo</p>
          </div>
        </div>
      </footer>
    </main>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>