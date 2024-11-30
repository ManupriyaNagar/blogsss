<?php 
require '../config/database.php';

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL BLOG Application with admin panel</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monsterrat:wght@300;400;500;600;700;900&display=swap">
    
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL ?>" class="nav_logo">EGATOR</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <!-- <li><a href="<?= ROOT_URL ?>signin.html">Signin</a></li> -->
                <li class="nav_profile"> 
                    <div class="avatar">
                       <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>/admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>