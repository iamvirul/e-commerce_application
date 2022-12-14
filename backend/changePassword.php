<?php
require "./lib/connection.php";

if(!empty($_POST["code"])){
    $verification_code = $_POST["code"];
    $db = new Database();
    $cheaker = $db->iud("SELECT * FROM `users` WHERE `verification_code` = '".$verification_code."'");
    $cheaker_num = $cheaker->num_rows;

    if($cheaker_num == 1){
        $newP = $_POST["newP"];
        $comP = $_POST["conPassword"];
       if (strlen($newP) < 8 || strlen($newP) > 20) {
            echo " your password must between 8-20 characters !";
        } elseif ($newP !== $comP) {
            echo "Password dose not match";
        }else{
            $email = $_POST["email"];
            $db->iud("UPDATE `users` SET `password` ='".$comP."'  WHERE `email` = '".$email."'");
            echo "sucess";
        }
    }else{
        echo "invalid verification code";
    }

}else{
    echo "type your verification code";
}

?>