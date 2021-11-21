
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>
</head>
<body class="text-center" style="font-size:16px">
    <div id="microsoftazure" style="padding-top:20px;max-width:300px; margin:auto">
    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_dflqwg4a.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;text-align:center"  loop  autoplay></lottie-player>
<h2>Yeay!, Login Berhasil!</h2>
    <?php
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;
session_start();
require "vendor/autoload.php";
$auth = new Auth(Session::get("tenant_id"), Session::get("client_id"), Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
$tokens = $auth->getToken($_REQUEST['code']);
$accessToken = $tokens->access_token;
$auth->setAccessToken($accessToken);
$user = new User;
echo "<b>Name: "  . $user->data->getDisplayName() . "</b>
";
echo "<b>Email: " . $user->data->getUserPrincipalName() . "</b>
";

?>
    <?php include("js.php");?>
</body>
</html>

