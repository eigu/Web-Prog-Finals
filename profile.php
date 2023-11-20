<?php 
session_start();

if(!isset($_SESSION["login"])) {
	header("location:login.html");
}

  $con = mysqli_connect('localhost', 'root', '','online_store');

  $sql = "SELECT * FROM profile WHERE user_id = '$_SESSION[user_id]'";
  $result = mysqli_query($con, $sql);
  $user = mysqli_fetch_assoc($result);
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
    <main class="container">
      <div class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center"  style="max-width: 1200px; max-height: 800px;">
        <div class="row align-items-center rounded-3 shadow-lg my-auto hero">
          <div class="col-md-6 col-lg-5 d-none d-md-block p-0 shadow-lg">
              <img src="assets/stock/person_01.jpg"
              alt="login form" class="img-fluid" style="border-radius: .3rem 0 0 .3rem;" />
          </div>
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                      <form name="frmContact" method="post" action="update.php" style="max-width: 540.2px; height: 500px;"  class="needs-validation was-validated" novalidate="">
                          <a class="navbar-brand" href="index.php#home">
                              <img class="rounded-lg-3 d-block mb-4"  style="height: 85px;" src="assets/logo/logo_01.png" alt="">
                          </a>
      
                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Update your account</h5>
                          
                          <div class="mb-4 pe-4" style="overflow-y: scroll; overflow-x: hidden; height: 300px;">
                              <div class="form-outline mb-4">
                                  <input class="form-control form-control-lg" type="email" id="email" name="email" value="<?php echo $user['email'] ?>" required="">
                                  <label class="form-label" for="email">Email address</label>
                              </div>
  
                              <div class="form-outline mb-4">
                                  <div class="row">
                                      <div class="col-6">
                                          <input class="form-control form-control-lg form-small" type="username" id="username" name="username" value="<?php echo $user['username'] ?>" required="">
                                      </div>
                                      <div class="col-6">
                                          <input class="form-control form-control-lg form-small" type="password" id="password" name="password" value="<?php echo $user['password'] ?>" required="">
                                      </div>
                                      <div class="col-6">
                                          <label class="form-label" for="username">Username</label>
                                      </div>
                                      <div class="col-6">
                                          <label class="form-label" for="password">Password</label>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="form-outline mb-4">
                                  <div class="row">
                                      <div class="col-6">
                                          <input class="form-control form-control-lg form-small" type="firstname" id="firstname" name="firstname" value="<?php echo $user['firstname'] ?>" required="">
                                      </div>
                                      <div class="col-6">
                                          <input class="form-control form-control-lg form-small" type="lastname" id="lastname" name="lastname" value="<?php echo $user['lastname'] ?>" required="">
                                      </div>
                                      <div class="col-6">
                                          <label class="form-label" for="firstname">First Name</label>
                                      </div>
                                      <div class="col-6">
                                          <label class="form-label" for="lastname">Last Name</label>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="form-outline mb-4">
                                  <input class="form-control form-control-lg" type="mobile" id="mobile" name="mobile" value="<?php echo $user['mobile'] ?>" required="">
                                  <label class="form-label" for="mobile">Mobile</label>
                              </div>
  
                              <div class="form-outline">
                                  <input class="form-control form-control-lg" type="address" id="address" name="address" value="<?php echo $user['address'] ?>" required="">
                                  <label class="form-label" for="address">Address</label>
                              </div>
                          </div>
                          
                          <div class="pt-1 mb-4">
                          <input class="btn btn-dark btn-lg btn-block" type="submit" value="Update">
                          </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>