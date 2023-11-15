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
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">
        <?php
        session_start();
        if (isset($_POST["submit"])) {
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];
        $money = 100;
        $_SESSION["money"] = $money;
        $subscription = "no";
        $_SESSION["sub"] = $subscription;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        
        if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
        }
        if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors,"Email already exists!");
        }
        if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<h5 class='alert alert-danger' style='margin: 0px;'>$error</h5>";
            }
        }else{  
            $sql = "INSERT INTO users (full_name, email, password, money, subscription) VALUES ( ?, ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssis",$fullName, $email, $passwordHash,$money,$subscription);
                mysqli_stmt_execute($stmt);
                echo "<h5 class='alert alert-success' style='margin: 0px;'>You are registered successfully.</h5>";
            }else{  
                die("Something went wrong");
            }
        }
        }
        ?>
        <section class="vh-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
              <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<center><dotlottie-player src="https://lottie.host/db23e828-4e7d-4466-9650-db2192b4a343/PTVz47xjIR.json" background="transparent" speed="1" style="width: auto; height: auto; padding-left:2rem; padding-top: 6rem;" loop autoplay></dotlottie-player></center>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="signup.php" method="post">
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0 text-warning">Signup</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>
  
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Full Name" name="fullname"/>
                    </div>
                    
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email address" name="email"/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example17" class="form-control form-control-lg" placeholder="Password" name="password"/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Repeat Password" name="repeat_password"/>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <input class="btn btn-warning btn-lg btn-block" type="submit" name="submit" value="Register">
                    </div>
                    
                    <div><p class="mb-5 pb-lg-2">Already Registered <a href="login.php">Login Here</a></p></div>

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