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
                    <img src="img/9.jpg" alt="Responsive image">
                    <div class="Caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:<i class="fas fa-rupee-sign"></i> 13000.00 </p>
                        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(5)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
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
                <img src="img/10.jpg" alt="Responsive image">
                <div class="Caption">
                    <h3>Titan Model #201 </h3>
                    <p>Price:<i class="fas fa-rupee-sign"></i>3000.00 </p>
                    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(6)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
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
            <img src="img/11.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>HMT Milan </h3>
                <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
                <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(7)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
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
        <img src="img/12.jpg" alt="Responsive image">
        <div class="Caption">
            <h3>Faber Luba #111 </h3>
            <p>Price:<i class="fas fa-rupee-sign"></i>18000.00 </p>
            <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(8)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
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
    <img src="img/watch1.jpg" alt="Responsive image">
    <div class="Caption">
        <h3>Rolex </h3>
        <p>Price:<i class="fas fa-rupee-sign"></i>13000.00 </p>
        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(45)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=45" name="add" value="add" class="btn btn-block
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
<img src="img/watch2.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Patek Philippe </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>10000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(46)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=46" name="add" value="add" class="btn btn-block
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
<img src="img/watch3.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Omega </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(47)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=47" name="add" value="add" class="btn btn-block
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
<img src="img/watch4.jpg" alt="Responsive image">
<div class="Caption">
    <h3>cartier </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>18000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(48)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=48" name="add" value="add" class="btn btn-block
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
<img src="img/watch5.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Montblanc </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>20000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(49)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=49" name="add" value="add" class="btn btn-block
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
<img src="img/watch6.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Hublot </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(50)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=50" name="add" value="add" class="btn btn-block
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
<img src="img/watch7.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Bremont </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>12000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(51)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=51" name="add" value="add" class="btn btn-block
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
<img src="img/watch8.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Roger Dubuis </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>15000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(52)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=52" name="add" value="add" class="btn btn-block
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