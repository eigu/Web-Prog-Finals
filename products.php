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
              <a class="nav-link" href="products.html">Shop</a>
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
                <li><a class="dropdown-item" href="#">Account Details</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="col-2 collapse navbar-collapse text-center justify-content-end" id="navbarCollapse">
          <button type="button" class="btn btn-outline-dark me-2" onclick="location.href='login.html'">Login</button>
        </div>
      </div>  
    </nav>
      
    <main class="container-fluid p-0">
      <div id="home" class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center">
        <div class="row p-0 align-items-center rounded-3 shadow-lg w-75 my-auto hero">
          <div class="col-lg-7 p-3 p-lg-5"> 
            <div class="col pb-4">
              <h2>Filter Anything</h2>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
        
          
            <div class="row row-cols-3 g-3">  
              <?php
              // database connection code
              $con = mysqli_connect('localhost', 'root', '','online_store');

              // database insert SQL code
              $sql = "SELECT * FROM products";

              $result = $con->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img src="assets/products/'.$row["image"].'.jpg" />';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$row["itemname"].'</h5>';
                echo '<p class="card-text">'.$row["description"].'</p>';
                echo '<p class="qty">'.$row["quantity"].'</p>';
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
      
    <script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myDIV *").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
      $("#myDIV img").each(function() {
          var alt = $(this).attr("alt").toLowerCase();
          if (alt.includes(value)) {
            $(this).show();
          } else {
            $(this).hide();
          }
        })
      });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>