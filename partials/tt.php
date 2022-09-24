

 <div class="container">
        <h1 class="text-center"> SignUp to our Website</h1>
        <form action=/ecommerce/signup.php method="post">
  <div class="form-group col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" pattern="[A-Za-z]{1}">
  </div>
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
  </div>
  <div class="form-group col-md-6">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group col-md-6">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
        </div>


        // old Login 
        $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
   include 'partials/dbconnect.php';
   $username = $_POST["username"];
   $password = $_POST["password"];
  
  
           $sql ="SELECT * FROM users where username ='$username' AND password ='$password'";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                $num = mysqli_num_rows($result);
               if($num==1){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: welcome.php");
                }
            else{
                $showError =true;
            }
        }


////cart.php
<?php
                        while($row = mysqli_fetch_array($result)){
                            $sum+=$row["price"];
                            $id="";
                            $id .=$row["id"] . ",";
                            echo "<tr><td>" . "#" .$row["id"] . "</td> <td>" . $row["name"] . "</td><td> Rs " . $row["price"] . " /td> <td><a href='cart-remove.php?id={$row['id']}' class='remove_items_link'>X</a></td></tr>";
                        }
                        $id=rtrim($id, ",");
                        echo "<tr><td></td><td>Total</td>" . $sum . "</td> <td>Rs <td><a href='success.php?itemsid=".$id."'class='btn btn-primary'>Confirm Order</a></td></tr>";
                        ?>