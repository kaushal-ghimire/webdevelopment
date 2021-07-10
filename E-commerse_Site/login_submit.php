<?php
require 'includes/common.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));

$select_query = "SELECT id,email from users";
$select_query_result = mysqli_query($con, $select_query);


if(mysqli_num_rows($select_query_result) === 0){
    echo 'There is no user with the email and password';
}else{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    if (isset($_SESSION['email'])) {
        header('location: product.php');
        }
}
?>

