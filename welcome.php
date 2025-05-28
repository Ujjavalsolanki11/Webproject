<?php
include("connection.php");
session_start();

$userprofile = $_SESSION['username'];
if($userprofile == true)
{

}
else{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sytle.css">
  </head>
  <body>
    <h1>PRODUCTS</h1>
    <label>product</label>
    <input type="textbox"  id="products" placeholder="Enter product"> <br><br>
    <label>catagory</label>
    <input type="textbox"  id="catagory" placeholder="Enter catagory"> <br><br>
    <label>Subcatagory</label>
    <input type="textbox"  id="Subcatagory" placeholder="Enter Subcatagory"> <br><br>
    <label>price</label>
    <input type="textbox"  id="price" placeholder="Enter price"> <br><br>
    <label>Discription</label>
    <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter Any Other Information Here"></textarea><br>
    <input type="submit" name="" value="submit"> 

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
</head>
<body>

<h2>Product Table</h2>

<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Product 1</td>
            <td>Category 1</td>
            <td>Subcategory 1</td>
            <td>$10.00</td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>Category 2</td>
            <td>Subcategory 2</td>
            <td>$20.00</td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>Category 3</td>
            <td>Subcategory 3</td>
            <td>$30.00</td>
        </tr>
    </tbody>
</table>

</body>
</html>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <a href="login.php"><input type="submit" id="btn" value="logout" ></a> 
  </body>
</html>

