
<?php
$con = mysqli_connect("localhost", "root", "", "mydata");
if (!$con) {
  die("Not connected to the database due to " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];

  $cq = "SELECT * FROM empdata WHERE username='$username' OR email='$email'";
  $res = mysqli_query($con, $cq);
  $count = mysqli_num_rows($res);
  

  if ($count > 0) {
    echo "<script>alert('Username Or Email Is Already Exists...');</script>";
  } else {
    $sql = "INSERT INTO `empdata`(`username`, `password`, `email`, `phone`, `birthday`, `gender`) VALUES ('$username','$password','$email','$phone','$birthday','$gender')";

    if (mysqli_query($con, $sql)) {
      echo "<script>alert('Record Inserted Successfully');</script>";
    } else {
      echo "<script>alert('Some Error Occurs');</script>";
    }
  }
  $con->close();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="lg.css">
  <script src="script.js"></script>
</head>

<body>
  <?php require 'partials/_nav.php' ?>
  <div class="container">
    <h1 class="text-center">REGISTER YOUR DETAILS</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">&nbsp <i class="fas fa-user"></i> &nbsp Username</label>
        <input type="text" class="form-control" id="username" name="username">
        <div id="emailHelp" class="form-text">Please provide your username</div>
      </div>
      <div class="mb-3">
        <label for="Password1" class="form-label"> &nbsp <i class="fa fa-lock" style="font-size:24px"></i> &nbsp Password</label>
        <input type="password" class="form-control" id="Password1" name="password">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">&nbsp <i class="fa fa-envelope-o" style="font-size:24px"></i> &nbsp Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">&nbsp <i class="fa fa-phone" aria-hidden="true"></i> &nbsp Phone No:</label>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>
      <div class="mb-3">
        <label for="birthday">&nbsp <i class="fa fa-birthday-cake" aria-hidden="true"></i> &nbsp Birthday:</label>
        <input type="date" class="form-control" id="birthday" name="birthday">
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">&nbsp <i class="fa fa-male" aria-hidden="true"></i> &nbsp Male</label>
        <input type="radio" name="gender" value="male">
        <label for="gender" class="form-label">&nbsp <i class="fa fa-female" aria-hidden="true"></i> &nbsp Female</label>
        <input type="radio" name="gender" value="female">
      </div>
      <button type="submit" class="btn btn-primary" name="btn">Signup <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      <h3>
    -----OR-----
      </h3>
    </form>
    <p>Already Have Account?</p>
    <a href="login.php">login now</a>
    
    
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
