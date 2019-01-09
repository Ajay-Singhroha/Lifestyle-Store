<?php
    require 'includes/common.php';
    $item_id= $_GET['item_id'];
    $user_id=$_SESSION['id'];
    
    $insert_query="INSERT INTO users_products(user_id,product_id,status) VALUES('$user_id','$item_id','Added to cart');";
    
    $result= mysqli_query($con, $insert_query)  or die(mysqli_error($con));
    
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
    }
    

?>
