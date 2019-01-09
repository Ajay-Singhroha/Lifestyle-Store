<?php
require 'includes/common.php';

if (isset($_SESSION['email'])) {
    header('location:products.php');
}
?>












<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<?php require 'includes/header.php'; ?>

    <div class="container">
        <div class="row  row_style">
            <div class=" col-xs-offset-3 col-xs-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Sign Up</h2>

                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <form method="POST" action="signup_script.php">
                                <div class='form-group'>
                                    <label for="name">Name</label>
                                    <input type='text' class='form-control' name='name' required>
                                </div>
                                <div class='form-group'>
                                    <label for="email">E-mail</label>
                                    <input type='email' class='form-control'  required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <div><?php echo filter_input(INPUT_GET,'email_error'); ?></div>
                                </div>
                                <div class='form-group '>
                                    <label  for="password">Password</label>
                                    <input type="password" class='form-control ' name="password"  required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                    <div><?php echo filter_input(INPUT_GET,'password_error'); ?></div>

                                </div>
                                <div class='form-group'>
                                    <label for="contact">Contact</label>
                                    <input type='number' class='form-control ' name='phone' required >
                                </div>
                                <div class='form-group'>
                                    <label for="city">City</label>
                                    <input type='text' class='form-control  ' name='city' required>
                                </div>
                                <div class='form-group'>
                                    <label for="add">Address</label>
                                    <input type='text' class='form-control  ' name='add' required>
                                </div>
                                <input type="submit" name='submit' class='btn  btn-warning btn-block btn-lg' value="Submit">
                            </form>

                        </div>



                    </div>
                    <div class="panel-footer">
                        <p class=" text-justify text-left">Already registered? Login   <a href="login.php"  >here</a></p>
                    </div>


                </div>
            </div>
        </div>
    </div>






<?php require 'includes/footer.php'; ?>


</html>
