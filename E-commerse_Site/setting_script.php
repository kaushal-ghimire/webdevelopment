<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])){
   header('location: index.php'); 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Validates password & confirm passwords.
    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            echo '$passwordErr';
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
            echo '$passwordErr';
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            echo '$passwordErr';
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            echo '$passwordErr';
        } else {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
            echo '$passwordErr';
        }
    } else {
     $passwordErr = "Please enter password   ";
}
}
?>
<?php
$select_query = "SELECT *from users";
$select_query_result = mysqli_query($con, (INT)$select_query)or die(mysqli_error($con));
$total_rows_affected = mysqli_num_rows($select_result);
echo $rows_rows_affected;
?>


