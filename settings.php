<?php require 'includes/common.php'; 
        

if(!isset($_SESSION['email']))
{
header('location:index.php');
}

?>




<!DOCTYPE html>

<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require 'includes/header.php'; ?>
        
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-collapse panel-title">
                        <div class="panel-heading">
                            <h1> Change Passsword</h1>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <form method="POST" action="settings_script.php">
                                    <div class="form-group">
                                        <label for="old">Old Password</label>
                                        <input type="password" class="form-control input-lg"  name="old" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                        <div><?php echo filter_input(INPUT_GET,'old_error'); ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="new">New Password</label>
                                        <input type="password" class="form-control input-lg" name="new" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                    </div>
                                    <div class="form-group">
                                        <label for="con">Confirm Password</label>
                                        <input type="password" class="form-control input-lg" name="con" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                     <div><?php echo filter_input(INPUT_GET,'pass_error'); ?></div>

                                    </div>
                                    <input type="submit" name='submit' class='btn  btn-info btn-block btn-lg' value="Submit">

                                </form>                  
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
                <?php require 'includes/footer.php'; ?>


    </body>
</html>
