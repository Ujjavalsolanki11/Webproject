<?php
$con = mysqli_connect("localhost", "root", "", "mydata");
if ($con) {
    //echo"<script>alert('SUCCESS');</script>";
}else{
  die("Not connected to the database due to " . mysqli_connect_error());
}
?>