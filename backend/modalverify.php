<?php
require "./lib/connection.php";
if(!empty($_POST["verification_code"])){
    $verification_code = $_POST["verification_code"];
    $db = new Database();
    if(!empty($_POST["email"])){
        $email = $_POST["email"];
        $verification_code_cheack = $db->iud("SELECT * FROM `users` WHERE `email` = '".$email."'");
        $user_num = $verification_code_cheack->num_rows;
        if($user_num == 1){
            $verify = $db->iud("SELECT * FROM `users` WHERE `verification_code` = '".$verification_code."'");
            $verify_num = $verify->num_rows;
            if($verify_num == 1){
                echo "Your verification code is correct";
            }else{
                echo "invalid verification code";
            }
        }else{
            echo "Invalid user please cheack your email";
        }
    }else{
        echo "Please type your email in Sign In";
    }
}else{
    echo "please type your verification code first";
}

?>