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
                <p>We have the best watches for you. No need to hunt around, we have all in one place.</p>
            </div>
        
            <div id="Watches" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/blue_angles.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Blue Angles</h3> 
                        <p>Price:Rs.11000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,5,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/rolex.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Rolex</h3> 
                        <p>Price:Rs.75000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,6,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/jack_pierre.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Jack Pierre</h3> 
                        <p>Price:Rs.9999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,7,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/un_watch.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>UN Watch</h3> 
                        <p>Price:Rs.11999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,8,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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