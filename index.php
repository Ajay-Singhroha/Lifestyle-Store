<?php require 'includes/common.php';
        
        if(isset($_SESSION['email'])){
            header('location:products.php');
        }
?>

<html>
    <head>
        <title>Lifestyle Store</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php require 'includes/header.php'; ?>

        <div class="content">
            <div class="banner-image">

                <div class="banner-content">
                    <h1>We sell lifestyle</h1>
                    <p>
                        FLAT 40% OFF on premium brands
                    </p>
                    <a <?php if(!isset($_SESSION['email'])) {  ?>  href="login.php"  <?php  }  else {  ?>   href="products.php"   <?php } ?> class="btn btn-danger btn-lg active">Shop Now</a>
                </div>

            </div>

            
            

            <div class="container">
                <div class="items">
                    <a <?php if(!isset($_SESSION['email'])) {  ?>  href="login.php"  <?php  }  else {  ?>   href="products.php"   <?php } ?>><img class="thumbnail" src="pictures/camera.jpg" alt="Not Found!">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div></a>

                </div>
                <div class="items">
                    <a <?php if(!isset($_SESSION['email'])) {  ?>  href="login.php"  <?php  }  else {  ?>   href="products.php"   <?php } ?>><img class="thumbnail" src="pictures/watch.jpg" alt="Not Found!">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                        </div></a>

                </div>
                <div class="items">
                    <a <?php if(!isset($_SESSION['email'])) {  ?>  href="login.php"  <?php  }  else {  ?>   href="products.php"   <?php } ?>><img class="thumbnail" src="pictures/shirt.jpg" alt="Not Found!">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div></a>

                </div>
            </div>



        </div>

        <?php
        require 'includes/footer.php';
        ?>

    </body>
</html>


