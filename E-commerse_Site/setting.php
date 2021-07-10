<!DOCTYPE html>
<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
   header('location: index.php'); 
}
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
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Change Password</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="setting_script.php">
                        <div class="form-group">
                            <input type="password" name="old_password" placeholder="Old Password" class="form-control" required="true">
                          </div>
                        <div class="form-group">
                            <input type="password" name="new_password" placeholder="New Password" class="form-control"required="true">
                            </div>
                        <div class="form-group">
                            <input type="password" name="retype_password" placeholder="Re-type New Password" class="form-control" required="true">
                            </div>  
                                <button type="submit" class="btn btn-primary">Change</button>
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
