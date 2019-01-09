<?php

require 'includes/common.php';

$email = filter_input(INPUT_POST,'email');
$password =filter_input(INPUT_POST,'password');



$emaile = mysqli_real_escape_string($con, $email);
$passworde = mysqli_real_escape_string($con, $password);



$passwords = md5($password);
$select_query = "SELECT email,id FROM users WHERE email='$emaile' AND password='$passwords';";
$result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($result);
if (mysqli_num_rows($result) == 0) {
     header('location: login.php?error=Wrong id and Password');
} else {
    $_SESSION['email'] = $emaile;
    $_SESSION['id'] = $row['id'];
    
   header('location:products.php');
}
?>
 



