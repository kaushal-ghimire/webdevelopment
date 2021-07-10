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
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <p>Your order is confirmed. Thank you for shopping with us.
                        <a href="product.php" class="btn btn-lg active">
                            Click here</a> to purchase any other item.</p>
                   
                </div>
            </div>
        </div> 
       <?php
       include 'includes/footer.php';
       ?>

    </body>
</html>
