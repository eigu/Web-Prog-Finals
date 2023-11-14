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
            <div class="container d-flex flex-column min-vh-100 justify-content-md-start align-items-center" style="max-width: 1200px; max-height: 800px;">
                <div class="row align-items-center rounded-3 shadow-lg my-auto hero">
                    <div class="col-md-6 col-lg-5 d-none d-md-block p-0 shadow-lg">
                        <img src="assets/stock/person_01.jpg"
                        alt="login form" class="img-fluid" style="border-radius: .3rem 0 0 .3rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <form name="frmContact" method="post" action="loginprocess.php" style="max-width: 600px; height: 500px;">
                                <a class="navbar-brand" href="index.html#home">
                                    <img class="rounded-lg-3 d-block mb-4"  style="height: 85px;" src="assets/logo/logo_01.png" alt="">
                                </a>
            
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            
                                <div class="form-outline mb-4">
                                <input type="username" class="form-control form-control-lg" />
                                <label class="form-label">Username</label>
                                </div>
            
                                <div class="form-outline mb-4">
                                <input type="password" class="form-control form-control-lg" />
                                <label class="form-label">Password</label>
                                </div>
            
                                <div class="pt-1 mb-4">
                                <input class="btn btn-dark btn-lg btn-block" type="submit" name="Login" id="Login" value="Login">
                                </div>

                                <?php 
                                if(isset($_REQUEST["err"]))
                                    $msg="Invalid username or Password";
                                ?>
                                <p style="color:red;">
                                <?php if(isset($msg))
                                {
                                echo $msg;
                                }
                                ?>
                                </p>

                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.html" style="color: #393f81;">Register here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>