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
        <br><br>
 
        <?php
//        $user_id=$_SESSION['id'];
        //changed from above user_id to $_getc ['user_id']
        $items_query="SELECT  *from product p INNER JOIN users_product up INNER JOIN users u ON p.id=up.product_id AND up.user_id=u.id AND up.status='Added To Cart'";
        
        // chaged from select * from user_items inner join items on user_items.item_id=items.id where items.id=$user_id";
        
        $items_query_result= mysqli_query($con, $items_query) or die(mysqli_error($con));
        
        
        
        ?>
        <br><br>
       <?php  if (mysqli_num_rows($items_query_result)==0){ ?> 
       <?php echo 'Add items to the cart first!';  }  else  {
           
       } ?>
        <div class="container">
             <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                             
                             
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                         
                        <tbody>
                            <?php 
                           
                                $total=0;
                                    while ($row= mysqli_fetch_array($items_query_result)) {  
                                        $total+=$row['price'];
                                        
                                          
                                                     ?>
                        
                            <tr>
                                
                                    <td><?php echo $row['id']  ?> </td> 
                                    <td >  <?php echo $row['name'];   ?> 
                                        <a href="cart-remove.php?id=<?php echo $row['id']; ?>" class='remove_item_link ' style="color:#e53939">Remove </a>
                                    </td>   
                                    <td> Rs. <?php   echo $row['price']; } ?>  </td>
                           
                                    <td align="right"> Rs. <?php echo $total;?> 
                                        <a href="success.php?id=" class='btn btn-primary'>Confirm Order</a>
                                    </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
       include 'includes/footer.php';
        ?>
    </body>
</html>
