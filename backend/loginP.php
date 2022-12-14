<?php 

session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$rememberme = $_POST["rememberme"];



if(empty($email)){
    echo " please enter your email !";
}elseif(strlen($email)>100){
    echo " Email must have less than 100 characters!";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo " Invalid Email !";
}elseif(empty($password)){
    echo " please enter your password !";
}elseif(strlen($password)<8 || strlen($password)>20){
    echo " your password must between 8-20 characters !";
}else{
    require  './lib/connection.php';

    $db = new Database();
    $rs = $db->search("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password`= '".$password."'");
     $n = $rs->num_rows;
     if($n == "1"){
        echo " Success !";
        $user = $rs->fetch_assoc();
        echo $user["fname"];
        $_SESSION["u"]= $user;
        
        

        if($_POST["rememberme"]== "true"){
            setcookie("email",$email,time()+(60*60*24*365));
            setcookie("password",$password,time()+(60*60*24*365));
        }else{
            setcookie("email","",time()-1);
            setcookie("password","",time()-1);
        }

     }else{
        echo " Invalid email or Password !";
     }
}
