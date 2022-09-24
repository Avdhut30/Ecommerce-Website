<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/bootstrap/4.5.2-dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>SignUp</title>
    <style>
        .container-1{
           /* width: 500px;
            height: 500px;
            border: 1px solid red;*/
            margin: 100px 0px 160px 300px;
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
        .c{
            width: 1000px;
            height: 200px;
            border: 1px solid transaparant;
        }
    </style>
  </head>
  <body>
  <?php 
        require 'partials/nav.php'?>
        
  
  
        <div class="container-1">
        <div class="c">
            <h1> LIVE SUPPORT<h1>

            <h4> 24 hours| 7 days a week | 365 days a year Live Technical Support<h4>
            <h5> It is a long established fact that  a reader will be readable content of a page when looking to its layout.
            The point of using Lorem ipsum is that more or less normal distribution of letters.There are many variatiopn Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore vero adipisci explicabo accusantium aut, corporis asperiores, quis earum nostrum ipsam iusto nulla dignissimos vel cupiditate.lorem23
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quaerat magni non cupiditate quas, veritatis adipisci aut harum, aliquam quidem iusto amet ullam?
            <h5>

            </div>
            <div class="row">
                <div class="col-xs-4">
                    <h1 class="text">
                       CONTACT US
                    </h1>
                    <form>
                    <div class="form-group ">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" pattern="[A-Za-z]{1,20}">
                      </div>
                      <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
                      </div>
                
                      <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                      <br/>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                            </div>
            </div>
        </div>

  </body>
  <?php
    include 'partials/footer.php';
    ?>
</html>
<style>
     footer .container{
           margin: 20px;
            padding: 10px 0;
            background-color: dark;
            color: #9d9d9d;
            text-align: center;
            bottom: 0;
            width: 1500px;

            
        }
       
        </style>
        </body>
        </html>