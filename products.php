
<?php require 'includes/common.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <?php require 'includes/header.php'; ?>
    <?php require 'includes/check-if-added.php'; ?>
    
    <h3> <?php echo filter_input(INPUT_GET,'error') ?></h3>

    <div class="container ">
        <div class="jumbotron jumbotron_style">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/canondslr.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Canon DSLR</h1>
                        <p>Price: Rs. 36000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(2)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php } else {
                                ?>                                           
                                <a href="cart-add.php?item_id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 


                    </div>
                </div>


            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/SonyA9.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Sony A9</h1>
                        <p>Price: Rs. 40000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php } else {
                                ?>                                            
                                <a href="cart-add.php?item_id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/canonnikon.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Nikon DSLR</h1>
                        <p>Price: Rs. 50000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(4)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php } else {
                                ?>                                           
                                <a href="cart-add.php?item_id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/canoneos.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Olympus DSLR</h1>
                        <p>Price: Rs. 80000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(5)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>                                         
                                <a href="cart-add.php?item_id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
        </div>



        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/Rolex.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Rolex R32</h1>
                        <p>Price: Rs. 13000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(6)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>                             
                                <a href="cart-add.php?item_id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/watch1.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Titan Luba</h1>
                        <p>Price: Rs. 8000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/apple.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Apple Series2</h1>
                        <p>Price: Rs. 42000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/titan1.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Titan Milan</h1>
                        <p>Price: Rs. 18000.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
        </div>



        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/shirt1.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>H&W</h1>
                        <p>Price: Rs. 1300.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/shirt2.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Luis Phil</h1>
                        <p>Price: Rs. 800.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/shirt3.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>John Zok</h1>
                        <p>Price: Rs. 4200.00</p>
                    </div>
                    <div>
                        <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>               
                                <a href="cart-add.php?item_id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="pictures/shirt4.jpg" alt="Camera">
                    <div class="capiton">
                        <h1>Jhalsani</h1>
                        <p>Price: Rs. 1000.00</p>
                    </div>
                    <div>           <?php if (!isset($_SESSION['email'])) {
                            ?>   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>     
                            <?php
                        } else {
                            if (check_if_added_to_cart(13)) {
                                ?>  <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php
                            } else {
                                ?>                                           
                                <a href="cart-add.php?item_id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                
                                <?php
                            }
                        }
                        ?> 

                    </div>
                </div>


            </div>
        </div>

    </div>



    <?php require 'includes/footer.php'; ?>


</body>
</html>


>   