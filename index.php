<?php
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_FusiontablesService.php';

/* Define all constants */
const CLIENT_ID = '370698715788-b31iqmsl5blamkrjkvc4fkckubstr7kc.apps.googleusercontent.com';
const FT_SCOPE = 'https://www.googleapis.com/auth/fusiontables';
const SERVICE_ACCOUNT_NAME = '370698715788-b31iqmsl5blamkrjkvc4fkckubstr7kc@developer.gserviceaccount.com';
// Email address, encode !!!

const KEY_FILE = '9420e118affcda58971244ac83956fca97552cfe-privatekey.p12';


$client = new Google_Client();
$client->setApplicationName("GFTPrototype");
$client->setClientId(CLIENT_ID);

//add key
$key = file_get_contents(KEY_FILE);
$client->setAssertionCredentials(new Google_AssertionCredentials(
    SERVICE_ACCOUNT_NAME,
    array(FT_SCOPE),
    $key)
);


$service = new Google_FusiontablesService($client);

$number = rand(1,100);
/*
$updateQuery = "update 1cVYibqfcRvnT4t5dKHjHZ1oddNwsV7jvFhHH6D0 set name = 'OK' where id = 1 ";
echo "<p><strong>SQL</strong>: ".$updateQuery."</p>";

echo "<pre>";
print_r($service->query->sql($updateQuery));
*/

//print_r($service->query->sql("delete from 1Ht0mtGW_p7GhVnmkKNLFJgYQ38vmheiLoAwOMac"));
print_r($service->query->sql("select * from 1Ht0mtGW_p7GhVnmkKNLFJgYQ38vmheiLoAwOMac"));
echo "</pre>";
?>