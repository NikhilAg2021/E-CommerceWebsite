<?php 
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product All Mart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 80px;">
                <h1>Welcome to All Mart!</h1>
                <p>We have the best mobiles for you. No need to hunt around, we have all in one place.</p>
            </div>
            
            <div id="Mobiles" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/iphone7.png" alt="shirt"/>
                    <div class="caption">
                        <h3>iphone 7</h3> 
                        <p>Price:Rs.25000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,13,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/iphonex.png" alt="shirt"/>
                    <div class="caption">
                        <h3>iphonex</h3> 
                        <p>Price:Rs.100000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,14,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/ipnone7plus.png" alt="shirt"/>
                    <div class="caption">
                        <h3>iphone 8</h3> 
                        <p>Price:Rs.35000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,15,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/iphone6splus.png" alt="shirt"/>
                    <div class="caption">
                        <h3>iphone 6</h3> 
                        <p>Price:Rs.20000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,16,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>                       
            </div>            
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>