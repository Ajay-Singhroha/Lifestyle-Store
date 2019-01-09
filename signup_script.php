<?php

require 'includes/common.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');
$phone =filter_input(INPUT_POST,'phone');
$city =filter_input(INPUT_POST,'city');
$address =filter_input(INPUT_POST,'address');

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3}))$/";


if (!preg_match($regex_email, $email)) {
    header('location: signup.php?email_error=Enter Correct email');
}

if (strlen($password) < 6) {
    header('location: signup.php?password_error=Enter Correct password');
}

$namee= mysqli_real_escape_string($con,$name);
$emaile= mysqli_real_escape_string($con,$email);
$passworde= mysqli_real_escape_string($con,$password);
$phonee= mysqli_real_escape_string($con,$phone);
$citye= mysqli_real_escape_string($con,$city);
$addresse= mysqli_real_escape_string($con,$address);


$passwords= md5($passworde);

$select_query="SELECT id FROM users WHERE email='$emaile' ;";

$select_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_result)>0)
{

    header('location: signup.php?email_error=Email already exists');
}

$insert_query= " INSERT INTO users(name,email,password,phone,city,address) VALUES('$namee','$emaile','$passwords','$phonee','$citye','$addresse'); " ;

$insert_result= mysqli_query($con, $insert_query) or die(mysqli_error($con));

$_SESSION['email']=$emaile;
$_SESSION['id']= mysqli_insert_id($con);





header('location:products.php');






?>





