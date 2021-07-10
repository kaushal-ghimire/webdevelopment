<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
         <?php
         include 'includes/header.php';
         include 'includes/check-if-added.php';
         ?><br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p>
            </div>
           
            <!--row for camera-->
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/5.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                       <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                       <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/2.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                           <h3>Sony DSLR</h3>
                           <p>Price:Rs.40000.00</p>
                          <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>

                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/3.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>Sony DSLR</h3>
                           <p>Price:50000.00</p>
                          <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/4.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>Olympus DSLR</h3>
                           <p>Price:Rs.80000.00</p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
            </div>
            
            <!--row for watches-->
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/9.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                           <h3>Titan Model #301</h3>
                           <p>Price:Rs.13000.00</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"
                                                  value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/10.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                           <h3>Titan Model #201</h3>
                           <p>Price:Rs.3000.00</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/11.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>HMT Milan</h3>
                           <p>Price:Rs.8000.00</p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/12.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>Faber Luba #111</h3>
                           <p>Price:Rs.18000.00</p>
                          <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
            </div>
            
            <!--row for shirts-->
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/8.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                           <h3>H&W</h3>
                           <p>Price:Rs.800.00</p>
                         <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/6.jpg" class="img-responsive" alt="camera"/> 
                       <div class="caption">
                           <h3>Luis Phil</h3>
                           <p>Price:Rs.1000.00</p>
                          <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/13.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>John Jok</h3>
                           <p>Price:Rs.1500.00</p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="img/14.jpg" class="img-responsive" alt="camera"/>
                       <div class="caption">
                           <h3>Jhalsani</h3>
                           <p>Price:Rs.1300.00</p>
                             <?php if(!isset($_SESSION['email'])){  ?>
                                        <p>
                                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                        </p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary"
                                                   name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
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
