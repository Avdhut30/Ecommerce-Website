<?php
require "partials/dbconnect.php";
if(!isset($_SESSION['username']))
{
    header('location: login.php');
}

else{
    error_reporting (E_ALL ^ E_NOTICE);
     $user_id =  $_SESSION["id"];
     $username = $_SESSION["username"];
     $new_pass = $_POST["new_pass"];
     $retype_pass = $_POST["retype_new_pass"];

     if($new_pass!= $retype_pass){
        $message = "The password do not match.";
        echo "<script type='text/javascript'>alert('$message');</script>";
     }
     else{
         $sql =" UPDATE ec.users SET `password` = '$new_pass' WHERE `users`.`id` = '$user_id'";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         
         $message = "You have successfully Update the password..";
        echo "<script type='text/javascript'>alert('$message');</script>";
         

     }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
    <style>
    .container-1{
        margin: 100px 0px 300px 300px;
    }
    .form-control{
        margin-bottom: 15px;
    }
    footer .container{
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
<?php 
    include "partials/navbar.php";
?>
    <div class="container-1">
        <div class="row">
            <div class="col-xs-4">
                <h1>
                    Change Password
                </h1>
                <div><b class="red">
                    </b></div>
                <form method="post" action="">
                    <div class="form-gruop">
                        <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Old password">
                    </div>
                    <div class="form-gruop">
                        <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New pasword">
                    </div>
                    <div class="form-gruop">
                        <input type="password" class="form-control" name="retype_new_pass" id="retype_new_pass" placeholder="Re-type password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    <?php
                    include "partials/footer.php";
                    ?>
            
        
</body>
</html>