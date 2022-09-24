<?php
require "partials/dbconnect.php";
    if(!isset($_SESSION['username'])){
        header('location: index.php');

    }
    $user_id = $_SESSION['user_id'];
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id= ". $user_id . " and status='Added to cart'";
    mysqli_query($conn, $query);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-1">
        <div class="jumbotron">
            <h1>
                Your Order is Confirmed.
            </h1>
            <p>Thank you fo shopping with us.<a href="welcome.php">click here </a>to purchase any other item</p>
            </div>
        </div>
</body>
</html>