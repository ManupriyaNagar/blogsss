<?php
require 'config/constants.php';

//connect to db

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_Name);

if (mysqli_errno($connection)){
    die(mysqli_errno($connection));
}

