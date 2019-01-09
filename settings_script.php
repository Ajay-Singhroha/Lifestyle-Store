<?php

require 'includes/common.php';

if (isset($_SESSION['email'])) {
    header('location:index.php');
}

$old_pa = filter_input(INPUT_POST,'old');
$new_pa = filter_input(INPUT_POST,'new');
$con_pa = filter_input(INPUT_POST,'con');


$old_pas = mysqli_real_escape_string($con,$old_pa);
$new_pas = mysqli_real_escape_string($con,$new_pa);
$con_pas = mysqli_real_escape_string($con,$con_pa);

$old_pass= md5($old_pas);
$new_pass= md5($new_pas);
$con_pass= md5($con_pas);


$select_query=" SELECT password FROM users WHERE email='$_SESSION[email]' ;";


$result= mysqli_query($con, $select_query) or die(mysqli_error($con));



   $row= mysqli_fetch_array($result);
   
   
   
if(mysqli_num_rows($result)==1 && $old_pass=== $row['password'])
{
    if($new_pass===$con_pass)
    {
        $update_query=" UPDATE users SET password='$new_pass' WHERE email='$_SESSION[email]' ; ";
        
        $update_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
        
       header('location:products.php');
    }
    
 else {
        header('location: settings.php?pass_error=Password and Confirm password does not match');
    }
    
    
    
}
 else {
    header('location:settings.php?old_error=Invalid Password');
}


?>