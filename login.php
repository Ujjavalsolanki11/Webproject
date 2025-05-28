<?php
session_start();
$con=mysqli_connect("localhost","root","","mydata");
if (!$con) {
  die("Not connected to the database due to " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $cq = "SELECT * FROM empdata WHERE username='$username' AND password='$password'";
  //echo $cq;
  $res = mysqli_query($con, $cq);
  $count = mysqli_num_rows($res);

  if($count==1){
    $_SESSION["username"]=$username; 
    header('location:welcome.php');
  }
  else{
    echo "<script>alert('Username Or Email Is Incorrect');</script>";
  }
}
 
  $con->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="lg.css">
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <div class="container">
    <h1 class="text-center">LOGIN</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">&nbsp <i class="fas fa-user"></i> &nbsp Username</label>
        <input type="text" class="form-control" id="username" name="username">
        <div id="emailHelp" class="form-text">Please provide your username</div>
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label"> &nbsp <i class="fa fa-lock" style="font-size:24px"></i> &nbsp Password</label>
        <input type="password" class="form-control" id="Password" name="password">

        <div class="forgetpass"><a href="#" class="link" onclick="message()">forget password?</a></div>
        <script>
          function message()
          {
            alert("Please remain your password")
          }
        </script>
      </div>
      <button type="submit" class="btn btn-primary" id="login" name="btn">Login <i class="fa fa-arrow-right" aria-hidden="true"></i ></button>
      <h3>Don't Have Account</h3>
      <a href="signup.php">register now</a>

  </body>
</html>
  
</body>
</html> 