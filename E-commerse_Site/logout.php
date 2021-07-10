<?php
require 'includes/common.php';
session_unset();
session_destroy();
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>

