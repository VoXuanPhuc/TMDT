
<?php

require_once 'ggapi/vendor/autoload.php';

$clientId = '139900133939-ponbhto9cffd2mrcg8cdpl5ptbcjjefu.apps.googleusercontent.com';
$clientSecret = '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';
$redirectLogin = 'http://localhost/meta';


$client = new Google_Client();

$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectLogin);

$client->addScope("profile");
$client->addScope("email");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);
} else {
    require_once('loginpage.php');
}

