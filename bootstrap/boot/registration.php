<?php
    phpinfo();
$con = mysqli_connect("localhost", "root", "", "audi")or die(mysqli_error($con));
$email =$POST['email'];
$first_name =$_POST['first_name'];
$last_name =$POST['last_name'];
$phone = $POST['phone'];
$user_registration_query = "insert into users(email,first_name,last_name,phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit=mysqli_query($con,$user_registration_query);
echo "User Successfully inserted";
?>