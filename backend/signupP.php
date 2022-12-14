<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile =$_POST["mobile"];
$gender =$_POST["gender"];

if(empty($fname)){
    echo " Please enter your first name!";
}elseif(strlen($fname)>50){
    echo " First name must less than 50 characters !";
}elseif(empty($lname)){
    echo " Please enter your last name!";
}elseif(strlen($lname)>50){
    echo " Last name must less than 50 characters !";
}elseif(empty($email)){
    echo " Please enter your email !!"; 
}elseif(strlen($lname)>100){
    echo " Email must less than 50 characters !";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo " Invalid Email !";
}elseif(empty($password)){
    echo " Please eneter your password !";
}elseif(strlen($password)<8 || strlen($password)>20){
    echo " Your password must be between 8-20 characters.";
}elseif(empty($mobile)){
    echo " Please enter your mobile number ";
}elseif(strlen($mobile)<10){
    echo " Mobile must have have 10 characters !";
}
elseif(!preg_match("/07[0,1,2,3,4,5,6,7,8][0-9]/",$mobile)){
    echo(" Invalid mobile number ! ");
}else{
    require  './lib/connection.php';

$db = new Database();
$rs = $db->search("SELECT * FROM `user` WHERE `email` = '".$email."' OR `mobile`='".$mobile."'");
$n = $rs->num_rows;
// echo $n;

if($n==1){
    echo " your Email or Mobile already excist";
}else{
    $date = new DateTime();
    $time_zone = new DateTimeZone("Asia/Colombo");
    $date ->setTimezone($time_zone);
    $d = $date-> format("Y-m-d H-i-s");

   $db->insert("INSERT INTO `user`
   (`email`,`fname`,`lname`,`password`,`mobile`,`join_date`,`status`,`gender_id`)VALUES
   ('".$email."','".$fname."','".$lname."','".$password."','".$mobile."','".$d."','1','".$gender."')");
    
    echo " success";
}


}



?>