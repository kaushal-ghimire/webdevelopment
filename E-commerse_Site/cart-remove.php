<?php
require 'includes/common.php';
$item_id = $_SESSION['id'];
$user_id = $_SESSION['user_id'];
$deletion = "DELETE FROM users_product where user_id = '$user_id' and item_id= '$item_id' ";

if(isset($_SESSION['$deletion'])){
    header('location: cart.php');
}
?>
