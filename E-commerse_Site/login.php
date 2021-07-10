<!DOCTYPE html>
<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>Login</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="login_submit.php">
                    <p class="text-warning">Login to make purchase</p> 
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.html"> Register</a></p>
                <a class="btn btn-primary" href="setting.html">Forget Password</a>
            </div>
        </div>
                </div>
            </div>
        </div>
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
