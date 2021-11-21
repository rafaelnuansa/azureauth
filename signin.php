<?php 

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "374bf0c3-b13e-4345-ae4e-54b34048ada5";
$client_secret = "Wc67Q~eCoB1IOjWFj2uYm8JrUZ9RdC_KRBW14";
$callback = "http://localhost/azureauth/callback.php";
$scopes = ["User.Read"];
$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());

?>