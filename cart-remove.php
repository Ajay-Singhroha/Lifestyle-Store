<?php

require 'includes/common.php';


if (!isset($_SESSION['email'])) {
    header('location:index.php');
    
}

    $item_id= $_GET['id'];
    $user_id=$_SESSION['id'];
    echo $user_id."    ".$item_id;
    
    $delete_query="DELETE FROM users_products WHERE user_id=$user_id AND product_id=$item_id;";
    
    $result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
    
    if(mysqli_affected_rows($con)>0)
    {
        header('location:cart.php');
    }


?>
