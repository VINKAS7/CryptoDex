<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <title>CryptoDex</title>
    <style>
    html,body{
        width: 100vw;
        height: 100vh;
    }
    </style>
</head>
<body >
  <section class="bg-dark">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-dark rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Panel</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="images/Windows_10_Default_Profile_Picture.svg.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Vinayak Kashyap</h5>
            <p class="text-muted mb-1">Indus University</p>
            <p class="text-muted mb-4">Ahmedaba,Gujarat</p>
            <div class="d-flex justify-content-center mb-2">
              <a class="btn btn-warning" href="index.php">Home</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">Google</p>
              </li>
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">Facebook</p>
              </li>
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">Twitter</p>
              </li>
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">Instagram</p>
              </li>
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">Discord</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <center>
        <div class="card mb-4">
          <div class="card-body">
          <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
          $c = mysqli_connect('localhost','root','','login_register');
          $b = "SELECT * FROM users";
          $d = mysqli_query($c,$b);
          while($x=mysqli_fetch_array($d))
          {
            
            $id = $x[0];
            $_SESSION["id"] = $id;
            $name =$x[1];
            $email = $x[2];
            echo '<tr>';
            echo '<th scope="row">';
            echo $id; 
            echo '</th>';
            echo '<th>';
            echo $name;
            echo '</th>';
            echo '<th>';
            echo $email;
            echo'</th>';
            echo '<th>';
            echo '<a class="btn btn-danger" href="remove.php">Remove</a>';
            echo '</th>';
            echo '</tr>';
          };
        ?>
    </tbody>
  </table>
          </div>
        </div>
        </center>
      </div>
    </div>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>