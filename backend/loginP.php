<?php
require_once './google/vendor/autoload.php';
$clientID = '1054469728660-re2m2vldbbq3qep7o2vdqj7h8cihlgmd.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURL = 'http://localhost/viva/index.php';

// creating client request to google

$client = new Google_Client ();
$client -> setClientId($clientID);
$client ->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURL);
$client->addScope('profile');
$client->addScope('email');


if(isset($_GET['code'])){
  
}else{
    echo $client->createAuthUrl(); 

}
?>