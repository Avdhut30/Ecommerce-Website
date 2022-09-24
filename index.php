<?php
    require "partials/dbconnect.php";
    if(isset($_SESSION['username'])){
        header("location: welcome.php");
    }
    ?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/bootstrap/4.5.2-dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" >
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
    <style>
        body{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        a{
            text-decoration: none;
            background-color: transparent;
            color: #ededed;
        }
        .content{
            min-height: 500px;
        }
        #banner_image{
            width: 100%;
            height: 100%;
            padding-top: 12%;
            padding-bottom: 50px;
            margin-top: auto;
            text-align: center;
            position: relative;
            color: f8f8f8;
           background: url(img/intro-bg_1.jpg) no-repeat center center;
            -webkit-background-size: 100% 100%;
            background-size: cover;
           
        }
        .inner-banner-image{
            width: 70%;
            padding-top: 10%;
            padding-bottom: 30%;
            margin: 10px 20px 50px 150px ;

        }
        #banner_content{
            position: relative;
            padding-top: 6%;
            padding-bottom: 6%;
            overflow: hidden;
            margin-bottom: 10%;
            margin-left: 35%;
            text-decoration: none;
            color: #fff;
            background-color: rgba(0,0,0,0.7);
            max-width: 500px;
        }
        .btn a{
            color: #fff;
            text-decoration: none;
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
        
  
        
    <div class="content">
    <div id="banner_image">
        <div class="inner-banner-image">
            <div id="banner_content">
                <h1>We sell lifestyle</h1>
                <p> Flat 40% OFF on premium brands</p>
                <button type="button" class="btn btn-danger btn-lg-active"><a href="welcome.php">Shop Now</a></button>
             </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <footer>
        <div class="container">
            <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Lifestyle Store. All Rights Reserved and Contact US: +91 90000 00000</span></p>
        </div>
    </footer>
    
</body>
</php>