<?php
function check_if_added_to_cart($item_id){
    $user_id = $_SESSION['id'];
       require 'includes/common.php';
       $select_query = "SELECT *FROM user_items WHERE item_id='$item_id'
         AND user_id ='$user_id' and status='Added to cart'";
$select_query_result = mysqli_query($con, $select_query);

if(mysqli_num_rows($select_query_result) >= 1){
    return 1;
}else{
    return 0;
}
}

?>

