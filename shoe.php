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
                <p>We have the best shoes for you. No need to hunt around, we have all in one place.</p>
            </div>
            
            <div id="Shoes" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/nike.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Nike Sports</h3> 
                        <p>Price:Rs.4000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,21,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/Power Walking.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Power Walking Shoes</h3> 
                        <p>Price:Rs.1500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,22,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/Reebok Sports shoes.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Reebok Sportsware</h3> 
                        <p>Price:Rs.3000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,23,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/adidas.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Adidas Sneakers</h3> 
                        <p>Price:Rs.999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,24,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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