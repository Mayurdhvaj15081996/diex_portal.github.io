<?php
//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('305658601639-p6k7fuhv4npnod01c4rek35da7nm8l8v.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('aIwfxckj9f9vTEwFTDw6ogQO');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/phpproject/DIEx_Portal/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();
?>