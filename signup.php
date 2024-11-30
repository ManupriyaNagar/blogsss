<?php
session_start();
require 'config/constants.php';

//get back form data if there was registration error

$_firstname = $_SESSION['signup-data']['firstname'] ?? null;
$_lastname = $_SESSION['signup-data']['lastname'] ?? null;
$_username = $_SESSION['signup-data']['username'] ?? null;
$_email = $_SESSION['signup-data']['email'] ?? null;
$_createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$_confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

// delete signup data 
unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL BLOG Application with admin panel</title>
    <link rel="stylesheet" href="<?=ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monsterrat:wght@300;400;500;600;700;900&display=swap">
    
</head>
<body>
<section class="form_section">
    <div class="container form_section_container">
        <h2>Sign Up</h2>
        <?php
             if(isset($_SESSION['signup'])): ?>
                <div class="alert_message error">
                <p><?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                 ?>
                 
                </p>
                
                </div>
             <?php endif ?>
        <form action="<?=ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="post">
            <input type="text" name="firstname" id="" value="<?=$firstname?>" placeholder="First Name">
            <input type="text" name="lastname" id="" value="<?=$lastname?>" placeholder="Last Name">
            <input type="text" name="username" id="" value="<?=$username?>" placeholder="Username">
            <input type="email" name="email" id="" value="<?=$email?>" placeholder="Email">
            <input type="password" name="createpassword" id="" value="<?=$createpassword?>" placeholder="Create Password">
            <input type="password" name="confirmpassword" id="" value="<?=$confirmpassword?>" placeholder="Confirm Password">
            <div class="from_control">
                <label for="avatar" name="avatar">User Avatar</label>
                <input type="file" name="" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Sign Up</button>
            <small>Already have an account ? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>

</body>
</html>