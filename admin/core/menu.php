<?php 

    include('../config/config.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Steakhouse Admin</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                    <li><a href="manage-food.php">Food Items</a></li>
                    <li><a href="manage-order.php">Order Section</a></li>
                    <li><a href="manage-customer.php">Manage Customer</a></li>
                    <li><a href="manage-admin.php">Manage Admin</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->