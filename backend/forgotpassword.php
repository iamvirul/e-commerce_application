
<?php
require "./lib/connection.php";
require "./lib/Exception.php";
require "./lib/SMTP.php";
require "./lib/PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer;

if($_GET["email"]){
    $email = $_GET["email"];
    $db = new Database();

    $users = $db->iud("SELECT * FROM `users` WHERE `email` = '".$email."'");
    $users_num = $users->num_rows;

    if($users_num == 1){
        $code = uniqid();
        $rs = $db->iud("UPDATE `users` SET `verification_code` = '".$code."' WHERE `email` ='".$email."'");
        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nirmalavirul24@gmail.com';
            $mail->Password = 'jbrlnpueakjndwcb';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('nirmalavirul24@gmail.com', 'Reset Password');
            $mail->addReplyTo('nirmalavirul24@gmail.com', 'Reset Password');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Shop.online Forgot password verification';
            $bodyContent = '<h1 style="color:blue">Your verification code is '.$code.'</h1>';
            $mail->Body    = $bodyContent;

            if($mail->send()){
                echo "Success";
            }else{
                echo "verification code sendig failed";
            }
    }else{
        echo "invalid email";
    }
}else{
    echo "Please enter your email...";
}

?>