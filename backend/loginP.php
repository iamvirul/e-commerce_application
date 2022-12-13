<?php
require_once './google/vendor/autoload.php';
require 'backend/google/vendor/google/auth/src/OAuth2.php';
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

session_start();

if(isset($_GET['code'])){
   $token = $client->fetchAccessTokenWithAssertion($_GET['code']);
   $client ->setAccessToken($token['access_token']);
   $_SESSION['access_token'] = $token['access_token'];

   $service = new Google_Service($client);
   $data = $service->userinfo->get();

   if(!empty($data['given_name'])){
    $_SESSION['name'] = $data['given_name'];
   }
}else{
    echo $client->createAuthUrl(); 

}
?>