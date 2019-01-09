<?php
require 'common.php';
function check_if_added_to_cart($item_id) {
    include 'common.php';
    $user_id = $_SESSION['id'];
    $select_query = " SELECT * FROM   users_products WHERE user_id='$user_id' AND product_id='$item_id' AND status='Added to cart' ;";
    $select_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
   
    if (mysqli_num_rows($select_result) >=1) {
        return 1;
    } else {

        return 0;
    }
}

?>