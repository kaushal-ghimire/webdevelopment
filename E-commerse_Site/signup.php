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
                    <div class="panel" style="max-width:500px;margin-left:auto;margin-right:auto;">
            <div class="panel-heading">
                <h1>SIGN UP</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <input placeholder="Name" type="text" name="name" class="form-control" required="true">
                           </div>
                           <div class="form-group">
                               <input type="email" placeholder="Email" name="email" class="form-control"required="true" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Contact" name="contact" class="form-control" required="true" pattern=".{10}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" placeholder="City" class="form-control" required="true">
                            </div>
                            <div class="form-group"> 
                                <input type="text" name="address" placeholder="Address" class="form-control" required="true">
                            </div><br>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
