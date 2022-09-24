<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
   include 'partials/dbconnect.php';
   $username = $_POST["username"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $phone = $_POST["phone"];
   $city = $_POST["city"];
   
    if($password==$cpassword){
      $sql = "INSERT INTO `users` (`username`, `password`, `cpassword`, `phone`, `city`, `dt`) VALUES ('$username', '$password', '$cpassword', '$phone', '$city',current_timestamp())";
      $result = mysqli_query($conn,$sql) ;
      $num = mysqli_num_rows($result) ;
      if($num==0 ){
        $message = "Your successfully signup now you can login.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location: welcome.php");
      }
     
      else{
        $message = "Invalid credentials";
      echo "<script type='text/javascript'>alert('$message');</script>";
      }
  }
}
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/bootstrap/4.5.2-dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>SignUp</title>
    <style>
        .container-1{
           /* width: 500px;
            height: 500px;
            border: 1px solid red;*/
            margin: 100px 0px 160px 300px;
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
        require 'partials/nav.php'?>
        
  
  
        <div class="container-1">
            <div class="row">
                <div class="col-xs-4">
                    <h1 class="text-center">
                        Sign up to our Website
                    </h1>
                    <form action=/ecommerce/signup.php method="post">
                    <div class="form-group ">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" pattern="[A-Za-z]{1,20}">
                      </div>
                      <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small id="emailHelp" class="form-text text-muted">Make sure your password will be more than 5 characters</small>
                      </div>
                      <div class="form-group ">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                        <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                      </div>
                      <div class="form-group ">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" maxlength="10">
                      </div>
                      <div class="form-group ">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                      </div>
                      <button type="submit" class="btn btn-primary">Signup</button>
                    </form>
                            </div>
            </div>
        </div>

  </body>
  <?php
    include 'partials/footer.php';
    ?>
</html>
<style>
     footer .container{
           margin: 20px;
            padding: 10px 0;
            background-color: dark;
            color: #9d9d9d;
            text-align: center;
            bottom: 0;
            width: 1500px;
            
        }
        </style>
        </body>
        </html>