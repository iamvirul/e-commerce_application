<?php
session_start();
require "./lib/connection.php";

if(isset($_SESSION["user"])){
    if(isset($_GET["ProductId"])){
       $productId = $_GET["ProductId"];
       $email = $_SESSION["user"]["email"];
       $db = new Database();
       $cart_rs = $db->search("SELECT * FROM `cart` WHERE `product_id` = '".$productId."' AND `users_email` = '".$email."' ");
       $cart_num = $cart_rs->num_rows;
       $cart_data = $cart_rs->fetch_assoc();
       $current_qty = $cart_data["qty"];
       $new_qty = $current_qty +1;
       if($cart_num == 0){
        $db->insert("INSERT INTO `cart` (`qty`,`product_id`,`users_email`) VALUES ('1','".$productId."','".$email."')");
        echo "Product add successfully";
       }else{
        $db->iud("UPDATE `cart` SET `qty` = '".$new_qty."' WHERE `product_id` = '".$productId."' AND `users_email` ='".$email."'  ");
        echo "Product qty updated";
       }


    }else{
        echo "Something went wrong";
    }

}else{
    echo "0";
}
