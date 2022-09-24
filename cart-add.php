<?php
require "partials/dbconnect.php";
    $item_id= $_GET['id'];
    $user_id =$_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES ('$user_id','$item_id','Added to cart')";
   $result= mysqli_query($conn,$query) or die(mysqli_error($conn));
    header('location: welcome.php');

?>