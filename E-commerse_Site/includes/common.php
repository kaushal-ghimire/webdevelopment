<?php
//session start
session_start();
$con = mysqli_connect("localhost","root","","ecommerce")or
        die(mysqli_error($con));
?>