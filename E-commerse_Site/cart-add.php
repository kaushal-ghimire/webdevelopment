<?php
$item_id = $_GET['user_id'];
require 'includes/common.php';
$insert_query = "INSERT INTO user_items(user_id, item_id, status)
        VALUES('$user_id', '$item_id', 'Added to cart')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));

if (isset($_SESSION['email'])) {
        header('location: product.php');
        }
?>
