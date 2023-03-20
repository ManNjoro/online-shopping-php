<?php
session_start();

include "connection.php";
    $_SESSION['success'] = "Order placed successfully";
    header('location: cart.php');
?>
