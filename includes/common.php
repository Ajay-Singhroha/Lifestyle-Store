<?php
$con = mysqli_connect("localhost", "root", "Singhrohaks@1", "ecommerce") or die(mysqli_errno($con));
if (!isset($_SESSION)) {
    session_start();
}
?>
