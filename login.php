<?php
$login=false;
 $showError = false;
include 'partials/dbconnect.php';

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $username =mysqli_real_escape_string($conn,$_POST["username"]);
    $password =mysqli_real_escape_string($conn,$_POST["password"]);
        $sql = "SELECT username ,password FROM users WHERE username ='$username' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $row = mysqli_fetch_array($result);
            $_SESSION['username']=$row['username'];
            $_SESSION['user_id']=$row['id'];
            $login = true;
            header("location: welcome.php");
        }

        else{
   
          $showError =true;
}
 }
                
            
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
   

    <title>Login</title>
    <style>
    .container-1{
  /* width: 500px;
   height: 500px;
   border: 1px solid black;*/
   margin-top: 100px;
   margin-left: 170px;
   margin-bottom: 200px;
}
.row_style{
    margin-top: 10px;
}
.panel
{
    margin-top: 10px;
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
        <?php
    if($login){
      $message = "Your Successfully Login..";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>
     <?php
    if($showError){
      $message = "Invalid Credentials..";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>
        <div class="container-1">
        <div class="row row_style">
            <div class="col-xs-6 col-xs-offset-2 column_style">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Login to make a purchase
                        </p>
                        
                        <form action="" method="post">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"  pattern="[A-Za-z]{1,20}"><br>
                        <input type="password" class="form-control" name="password" id="username" placeholder="Password" pattern=".{4,}"><br>
                        <button class="btn btn-primary">Login</button>
                    </form>
                    </div>
                    <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
                    <div class="panel-footer"><a href="forgot.php">Forgot password</a></div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <?php
    include 'partials/footer.php';
    ?>
  </body>
</html>