<?php
   

    $conn = mysqli_connect("localhost", "root", "", "ec") or die(mysqli_error($conn));
    if(!isset($_SESSION)){
        session_start();
    }
    
    ?>