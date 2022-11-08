<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>All Mart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    
        <?php
        include 'includes/header.php';
        ?>
       
        <div class="container" style="margin-top: 5%";>
            <div class="row">
                <div class="col-sm-4">
                    <a href="camera.php#Cameras" class="thumbnail">
                        <img src="img/camera.jpg" alt="camera"/>
                        <div class="caption">
                            <h3>Cameras</h3> 
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="watch.php#Watches" class="thumbnail">
                        <img src="img/watch.jpg" alt="watch"/>
                        <div class="caption">
                            <h3>Watches</h3> 
                            <p>Original watches from the best brands.</p>
                        </div>                        
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="shirt.php#Shirts" class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt"/>
                        <div class="caption">
                            <h3>Shirts</h3> 
                            <p>Our exquisite collection of shirts.</p>
                        </div>                        
                    </a>                   
                </div>
             <div class="col-sm-4">
                    <a href="mobile.php#Mobiles" class="thumbnail">
                        <img src="img/mobile.jpg" alt="shirt"/>
                        <div class="caption">
                            <h3>Mobiles</h3> 
                            <p>Our exquisite collection of shirts.</p>
                        </div>                        
                    </a>                   
                </div>
             <div class="col-sm-4">
                    <a href="bag.php#Bags" class="thumbnail">
                        <img src="img/bag.jpg" alt="shirt" width="1920" height="1107"/>
                        <div class="caption">
                            <h3>Bags</h3> 
                            <p>Our exquisite collection of shirts.</p>
                        </div>                        
                    </a>                   
                </div>
             <div class="col-sm-4">
                    <a href="shoe.php#Shoes" class="thumbnail">
                        <img src="img/11.jpg" alt="shirt" width="1920" height="1107"/>
                        <div class="caption">
                            <h3>Shoes</h3> 
                            <p>Our exquisite collection of shirts.</p>
                        </div>                        
                    </a>                   
                </div>
            </div>
        </div>>
        <?php
        include 'includes/footer.php';
        ?>
    
</html>

