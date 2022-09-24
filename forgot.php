<?php
    include 'partials/dbconnect.php';

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
                    SET Password
                </h1>
                <div><b class="red">
                    </b></div>
                <form method="post" action="">
                    <div class="form-gruop">
                        <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New pasword">
                    </div>
                    <div class="form-gruop">
                        <input type="password" class="form-control" name="retype_new_pass" id="retype_new_pass" placeholder="Re-type password">
                    </div>
                    <button type="submit" class="btn btn-primary">set</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    <?php
                    include "partials/footer.php";
                    ?>
            
        
</body>
</html>