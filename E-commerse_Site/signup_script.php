<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));

$select_query = "SELECT id,email from users";
$select_query_result = mysqli_query($con, $select_query);


// if(mysqli_num_rows($select_query_result) === 0){
//     echo 'There is no user with the email and password';
// }else{
//     $row = mysqli_fetch_array($select_query_result);
//     $_SESSION['email'] = $email;
//     $_SESSION['password'] = $password;
//     if (isset($_SESSION['email'])) {
//         header('location: product.php');
//         }
// }
$email = $_POST['email'];
$regex_email = "";
if(!preg_match($regex_email, $email)){
    echo 'Incorrect email';
}
$password = $_POST['password'];
if(strlen($password)<6){
    echo 'Password should have at least 6 characters';
}

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,md5($_POST['password']));
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);

$select_query = "SELECT email from signup where email = '$email'";
$select_query_result = mysqli_query($con, $select_query);

        if (mysqli_num_rows($select_query_result) > 0) {
     
        $row = mysqli_fetch_array($select_query_result);
        echo"Email Id already exists.";
        }
        else{
          $user_registration = "INSERT into signup(name,email,password,contact,city,address) 
                  values('$name','$email','$password','$contact','$city','$address')";
          $registration_submit = mysqli_query($con, $user_registration) or die(mysqli_error($con));
          mysqli_insert_id($con);
          $_SESSION['name'] = $name;
           $_SESSION['email'] = $email;
            $_SESSION['password'] = $email;
             $_SESSION['contact'] = $email;
              $_SESSION['city'] = $email;
               $_SESSION['email'] = $email;
           if (isset($_SESSION['email'])) {
        header('location: login.php');
        }
         
        }  
?>

