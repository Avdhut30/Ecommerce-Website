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
                    <img src="img/5.jpg" alt="Responsive image">
                    <div class="Caption">
                        <h3>Cannon EOS </h3>
                        <p>Price:<i class="fas fa-rupee-sign"></i> 36000.00 </p>
                        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(1)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
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
                <img src="img/2.jpg" alt="Responsive image">
                <div class="Caption">
                    <h3>Sony DSLR </h3>
                    <p>Price:<i class="fas fa-rupee-sign"></i>40000.00 </p>
                    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(2)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
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
            <img src="img/3.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Sony DSLR </h3>
                <p>Price:<i class="fas fa-rupee-sign"></i>50000.00 </p>
                <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(3)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
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
        <img src="img/4.jpg" alt="Responsive image">
        <div class="Caption">
            <h3>Olympus DSLR </h3>
            <p>Price:<i class="fas fa-rupee-sign"></i>80000.00 </p>
            <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(4)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
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
    <img src="img/cam1.jpg" alt="Responsive image">
    <div class="Caption">
        <h3>Titan Model #301 </h3>
        <p>Price:<i class="fas fa-rupee-sign"></i>13000.00 </p>
        <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(65)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=65" name="add" value="add" class="btn btn-block
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
<img src="img/cam2.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Titan Model #201 </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>3000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(66)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=66" name="add" value="add" class="btn btn-block
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
<img src="img/cam3.jpg" alt="Responsive image">
<div class="Caption">
    <h3>HMT Milan </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>8000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(67)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=67" name="add" value="add" class="btn btn-block
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
<img src="img/cam4.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Faber Luba #111 </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>18000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(68)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=68" name="add" value="add" class="btn btn-block
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
<img src="img/cam5.jpg" alt="Responsive image">
<div class="Caption">
    <h3>H&W </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>800.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(69)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=69" name="add" value="add" class="btn btn-block
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
<img src="img/cam6.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Luis.Phil </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>1000.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(70)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=70" name="add" value="add" class="btn btn-block
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
<img src="img/cam7.jpg" alt="Responsive image">
<div class="Caption">
    <h3>John Zok </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>1500.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(71)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=71" name="add" value="add" class="btn btn-block
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
<img src="img/cam8.jpg" alt="Responsive image">
<div class="Caption">
    <h3>Jhalsani </h3>
    <p>Price:<i class="fas fa-rupee-sign"></i>1300.00 </p>
    <?php if (!isset($_SESSION['username'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                                Now</a></p>
                                <?php
                                } else {
                                
                                if (check_if_added_to_cart(72)) { 
                                
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                                cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=72" name="add" value="add" class="btn btn-block
                                btn-primary">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                                <div class="col-md-3 col-sm-6">

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