<?php

require "partials/dbconnect.php";
if(!isset($_SESSION['username'])){
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/boot/css/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .container-1{
            margin: 100px 100px 400px 200px;
        }
        table .btn a{
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
    include "partials/navbar.php";
    ?>
    <div class="container-1">
        <div class="row row-style-3">
            <div class="col-sm-10 col-sm-offset-1">
            <?php error_reporting (E_ALL ^ E_NOTICE);?>
        <table class="table table-stripped table-bordered">
        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($conn, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
            </tbody>
                    <?php   }
            else{
                echo "<center><h2><br> Add items to the cart first! </h2><p><a href='welcome.php'>Click here</a> to explore products</p></center>";

            }
            ?>
            <?php
            ?>
        </table>
    </div>
        </div>
        </div>
        
    <?php
    include "partials/footer.php";
    ?>
</body>
</html>