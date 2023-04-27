<?php
$username=$_GET["name"];
$userage=$_GET["age"];
echo"welcome back ". $username." we noticed that the request method you used is ". $_SERVER["REQUEST_METHOD"]." and you are ". $userage." years old, thanks for visiting our server ". $_SERVER["SERVER_NAME"];
?>