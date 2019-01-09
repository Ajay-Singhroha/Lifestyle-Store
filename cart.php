<?php
require 'includes/common.php';


if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Your Cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require 'includes/header.php'; 
        $user_id = $_SESSION['id'];

        $select_query = "SELECT p.name, p.price, p.id FROM users_products up INNER JOIN users u ON u.id=up.user_id INNER JOIN products p ON p.id=up.product_id WHERE up.status='Added to cart';";

        $result = mysqli_query($con, $select_query) or die(mysqli_error($con));



        if (mysqli_num_rows($result) == 0) {
        
            header('location:products.php?error=Add items to Cart First!');
        } else {
           $total=0; $ids="";
           ?> 

        <div class="container row_style">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>
                                <h4>Item Number</h4>
                            </th>
                            <th>
                                <h4>Item Name</h4>
                            </th>
                            <th>
                                <h4>Item Price</h4>
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr><?php while ($row = mysqli_fetch_array($result)) {
               $total=$total+$row['price'];  $ids=$ids." ".$row['id']; $table_id=$row['id'];  ?>
           
                            <td><h2><?php echo $row['id']; ?></h2></td>
                            <td><h2><?php echo $row['name']; ?></h2></td>
                            <td><h2><?php echo $row['price']; ?></h2></td>
                            <td><h3><center> <a href='cart-remove.php?id=<?php echo $table_id; ?>'  class='remove_item_link btn btn-danger'>Remove</a></center></h3></td>
                        </tr><?php
                 }
        }
      ?>
                        <tr>
                            <td><h1><?php echo $ids; ?></h1></td>
                            <td><h1>Total</h1></td>
                            <td><h1><?php echo $total; ?></h1></td>
                            <td><h1><a href="success.php?id=$ids" class="btn btn-block btn-primary">Confirm Order</a></h1></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<?php require 'includes/footer.php'; ?>




    </body>
</html>
