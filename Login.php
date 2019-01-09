<?php require 'includes/common.php';?>



<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Login </title>
       
        <link rel="stylesheet" href="style.css" type="text/css"/>
       

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="login_body">
         
        
        <?php require 'includes/header.php';?>




        <div class="container">
            <div class="row  row_style">
                <div class=" col-xs-offset-3 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Login</h2>

                        </div>
                        <div class="panel-body">
                            <p class="text-warning text-left">Login to make a purchase</p>
                                    <div class="col-xs-12">
                                        <form method="POST" action="login_script.php">
                                            <div class='form-group'>
                                                <label for="email">E-mail</label>
                                                <input type='email' class='form-control  input-lg'  required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                            </div>
                                            <div class='form-group '>
                                                <label  for="password">Password</label>
                                                <input type="password" class='form-control input-lg ' name="password"  required >
                                                <div><?php echo filter_input(INPUT_GET,'error') ?></div>
                                            </div>
                                            <input type="submit" name='submit' class='btn  btn-primary btn-block btn-lg' value="Submit">
                                        </form>

                                    </div>
                            

                          
                        </div>
                        <div class="panel-footer">
                            <p class=" text-justify text-left">Don't have an account? <a href="signup.php"  >Register</a></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <?php  require 'includes/footer.php';?>

    </body>
</html>
