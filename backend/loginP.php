<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$rememberme = $_POST["rememberme"];

require_once './lib/connection.php';



if (empty($email)) {
    echo " please enter your email !";
} elseif (strlen($email) > 100) {
    echo " Email must have less than 100 characters!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo " Invalid Email !";
} elseif (empty($password)) {
    echo " please enter your password !";
} elseif (strlen($password) < 8 || strlen($password) > 20) {
    echo " your password must between 8-20 characters !";
} else {
    // echo $password;
    // echo $email;
    $db = new Database();
    $rs = $db->search("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    $user_num = $rs->num_rows;

    if($user_num == 1){
        echo "Success";
    $user_data = $rs->fetch_assoc();
        $_SESSION["user"] = $user_data;
    }

}
