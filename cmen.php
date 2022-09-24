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
                    <img src="img/6.jpg" alt="Responsive image">
                    <div class="Caption">
                        <h3>Levi's</h3>
                        <p>Price:<i class="fas fa-rupee-sign"></i> 5000.00 </p>
                        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(10)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
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
                <img src="img/8.jpg" alt="Responsive image">
                <div class="Caption">
                    <h3>Pepe jeans </h3>
                    <p>Price:<i class="fas fa-rupee-sign"></i>4000.00 </p>
                    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(9)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
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
            <img src="img/13.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Denim </h3>
                <p>Price:<i class="fas fa-rupee-sign"></i>5000.00 </p>
                <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(11)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
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
        <img src="img/14.jpg" alt="Responsive image">
        <div class="Caption">
            <h3>Benetton </h3>
            <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
            <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(12)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
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
    <img src="img/men1.jpg" alt="Responsive image">
    <div class="Caption">
        <h3>Tommy Hilfiger </h3>
        <p>Price:<i class="fas fa-rupee-sign"></i>1000.00 </p>
        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(13)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block
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
<img src="img/men2.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Lee </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>3000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(14)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block
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
<img src="img/men3.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Wrangler </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(15)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block
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
<img src="img/men4.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Adidas </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(16)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block
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
<img src="img/men5.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&M </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>6000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(17)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block
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
<img src="img/men6.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Polo </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>9000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(18)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block
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
<img src="img/men7.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Peter England </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>1000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(19)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block
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
<img src="img/men8.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Allen Solly </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>7000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(20)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block
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