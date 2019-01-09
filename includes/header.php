<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            
            <a href="index.php" class="navbar-brand">Lifestyle Store</a>

        </div>
        
        <div class="collapse navbar-collapse" id="myNavBar">
            
            <ul class="nav navbar-nav navbar-right">
                
                <?php
                
                if(isset($_SESSION['email']))
                {
                    ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                <li> <a href="settings.php"><span class="glyphicon glyphicon-asterisk"></span>Settings</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    
               <?php }
                
                else{
                    ?>
                <li><a href="Login.php"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user" ></span> SignUp</a></li>
                
                <?php
                }
                
                
                ?>
                
               
                
            </ul>
        </div>


    </div>
</div>