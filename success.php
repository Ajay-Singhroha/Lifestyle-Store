<?php require 'includes/common.php'; 
        

if(!isset($_SESSION['email']))
{
header('location:index.php');
}
    $user_id=$_SESSION['id'];
    $ids= filter_input(INPUT_GET, 'ids');
    $update_query="UPDATE users_products SET status='Confirmed' WHERE user_id=$user_id AND status='Added to cart';";
    
    $update_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
    
?>
<!DOCTYPE html>

<html>
    <head>
         <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require 'includes/header.php'; ?>
        
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-collapse panel-primary">
                        <div class="panel-heading">
                            <h1> Success!</h1>
                        </div>
                        <div class="panel-body">
                            <p> Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item. </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
       <?php require 'includes/footer.php'; ?>
        
    </body>
</html>
