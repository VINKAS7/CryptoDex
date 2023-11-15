<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-dark">     
        <?php
        if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["sub"] = "no";
                    $_SESSION["money"] =100;
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<h5 class='alert alert-danger border-0' style='margin: 0px;'>Password does not match</h5>";
                }
            }else{
                echo "<h5 class='alert alert-danger border-0' style='margin: 0px;'>Email does not match</h5>";
            }
        }
        ?>
    <section class="vh-100 bg-dark">
    <div class="container py-5 h-100 bg-dark">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
              <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<center><dotlottie-player src="https://lottie.host/db23e828-4e7d-4466-9650-db2192b4a343/PTVz47xjIR.json" background="transparent" speed="1" style="width: auto; height: auto; padding-left:2rem; padding-top: 2rem;" loop autoplay></dotlottie-player></center>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="login.php" method="post">
                    <div class="validate"></div>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0 text-warning">Login</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email address" name="email"/>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" name="password"/>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <input class="btn btn-warning btn-lg btn-block" type="submit" value="login" name="login">
                    </div>

                    <p class="mb-5 pb-lg-2" style="color: black;">Don't have an account? <a href="signup.php"
                        style="color: black;">Register here</a></p>
                </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>