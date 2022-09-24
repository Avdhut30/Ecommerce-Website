<?php
include "partials/dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>products</title>
    <style>
        .container-1
    {
       /* width:1500px;
        height: 200px;
        border: 1px solid black;*/
        margin: 50px 25px 25px 25px;
        text-align: center;
    }
    .thumbnail{
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        
            
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
    include "partials/n.php";
    include "partials/check-if-added.php";
    ?>
    <div class="container-1">
    <div class="row row_style_2">
    <div class="jumbotron">
        <h1>
            Welcome to our Lifestyle Store!
        </h1>
        <p>We have the best cameras,watches and shirts for you. No need to hunt around, we have all in one place. </p>
    </div>
    </div>
    </div>
    <div class="container-2">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/kids1.jpg" alt="Responsive image">
                    <div class="Caption">
                        <h3>Biba </h3>
                        <p>Price:<i class="fas fa-rupee-sign"></i>6000.00 </p>
                        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(33)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                                
                    </div>
                </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/kids2.jpg" alt="Responsive image">
                <div class="Caption">
                    <h3>Zara </h3>
                    <p>Price:<i class="fas fa-rupee-sign"></i>4000.00 </p>
                    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(34)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                </div>
            </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/kids3.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Fabindia </h3>
                <p>Price:<i class="fas fa-rupee-sign"></i>5000.00 </p>
                <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(35)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
            </div>
        </div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="img/kids4.jpg" alt="Responsive image">
        <div class="Caption">
            <h3>Levis </h3>
            <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
            <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(36)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="img/kids5.jpg" alt="Responsive image">
    <div class="Caption">
        <h3>Aurella </h3>
        <p>Price:<i class="fas fa-rupee-sign"></i>3000.00 </p>
        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(37)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
    </div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids6.jpg" alt="Responsive image">
<div class="Caption">
    <h3>westSide </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>3000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(38)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids7.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Allen Solly </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(39)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids8.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&M </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(40)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids9.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&M </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(41)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids10.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&W </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>7000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(42)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=42" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids11.jpeg" alt="Responsive image">
<div class="Caption">
    <h3>Levis </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(43)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=43" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="img/kids12.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&M </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>1000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(44)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=44" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
</div>
</div>
</div>



        </div>
        </div>
                <?php
    include "partials/footer.php";
    ?>
            </body>
            </html>