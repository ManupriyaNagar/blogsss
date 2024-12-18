<?php
session_start();
require 'config/database.php';

//get signup from data if signup btn is clicked

if(isset($_POST['submit'])){
    $firstname =filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname =filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username =filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $createpassword =filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword =filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    //validates
    if(!$firstname){
        $_SESSION['signup']="Please enter First Name";
    }
    elseif (!$lastname){
        $_SESSION['signup']="Please enter Last Name";
    }
    elseif (!$username){
        $_SESSION['signup']="Please enter user Name";
    }
    elseif (!$email){
        $_SESSION['signup']="Please enter valid email";
    }
    elseif (strlen($createpassword)<8|| strlen($confirmpassword)<8){
        $_SESSION['signup']="Pass should contain atleast 8 letters";
    }
    elseif (!$avatar['name']){
        $_SESSION['signup']="Please select image";
    }
    else {
        if($createpassword!== $confirmpassword){
            $_SESSION['signup']='passwards do not match';
        }
        else {
            //hash pass
            $hashed_password = password_hash($createpassword,PASSWORD_DEFAULT);
            // echo $createpassword . '<br/>';
            // echo $hashed_password;

            //check if username or email already exist in db
            $user_check_query = "SELECT * FROM views WHERE username ='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection,$user_check_query);
            if(mysqli_num_rows($user_check_result)>0){
                $_SESSION['signup'] = "username or email already exist";
            }else {
                //for avatar 
                //rename avatar for each 
                // $time = Math.random(000,999);
                $time = time();
                $avatar_name = $time.$avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '.images/' .$avatar_name;

                //make sure file is an image
                $allowed_files =['png','jpg','jpeg'];
                $extension = explode('.',$avatar_name);
                $extension = end($extension);

                if(in_array($extension,$allowed_files)){
                    //size of img should not be too large
                    if($avatar['size']<1000000){
                        //upload img
                        move_uploaded_file($avatar_tmp_name,$avatar_destination_path);
                    }
                    else {
                        $_SESSION['signup'] = 'file size is too large';
                    }
                }else {
                    $_SESSION['signup']="file should be jpg,jpeg,png";
                }


            }
        }
    }
    // var_dump($avatar);

    //redirect back to signup if there was any problem
    if(isset($_SESSION['signup'])){
        //pass from data back to signup page
        $_SESSION['signup-data']=$_POST;
        header('location: '.ROOT_URL.'signup.php');
        die();
    }else {
        //insert new user into users table
        $inset_user_query = "INSERT INTO views (firstname,lastname,username,email,password,avatar,is_admin) VALUES('$firstname', '$lastname','$username' , '$email', '$hashed_password', '$avatar_name' ,0";
        $inset_user_result = mysqli_query($connection,$inset_user_query);
        if (!mysqli_errno($connection)){
            $_SESSION['signup-success']= "Registration successfull . please log in";
            header('location: ' .ROOT_URL.'signup.php');
            die();
        }
    }
}else{
    //bounce back to signup
    header('location: ' .ROOT_URL.'signup.php');
    die();
}

