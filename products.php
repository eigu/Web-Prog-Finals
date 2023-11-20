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
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-custom navbar-expand-lg sticky-top mb-5 navbar shadow-lg">
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
      
    <main class="container p-0">
      <div id="home" class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="row p-0 align-items-center rounded-3 shadow-lg justify-content-center w-75 my-auto hero">
          <div class="col p-4"> 
            <div class="col pb-4">
              <h2>Filter Products</h2>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
        
          
            <div class="row row-cols-3 g-3 p-3">  
              <?php
              $con = mysqli_connect('localhost', 'root', '','online_store');

              $sql = "SELECT * FROM products";

              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<div class="col myDIV">';
                  echo '<div class="card" style="height: 400px;">';
                  echo '<img class="' . $row["itemname"] . '" src="assets/products/' . $row["image"] . '.jpg" style="height: 150px; object-fit: cover; border-radius: .3rem .3rem 0 0;"/>';
                  echo '<div class="card-body">';
                  echo '<h5 class="card-title ' . $row["itemname"] . '">' . $row["itemname"] . '</h5>';
                  echo '<p class="card-text">' . $row["description"] . '</p>';
                  echo '<p class="qty">Quantity: <span class="quantity">' . $row["quantity"] . '</span></p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                }
              } else {
              echo "0 results";
              }
              $con->close();
              ?>
            </div>

          </div>
        </div>
      </div>
    </main>
      
    <script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();

            $(".myDIV").each(function () {
                var productTitle = $(this).find(".card-title").text().toLowerCase();
                var productQty = $(this).find(".qty").text().toLowerCase();

                $(this).toggle(productTitle.indexOf(value) > -1 || productQty.indexOf(value) > -1);
            });
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>