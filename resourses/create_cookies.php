<?php
$cookie_email = "user_email";
$cookie_name = "user_name";
$email = $_GET['email'];
$name = $_GET['name'];
setcookie($cookie_email,$email,time()+(86400*30),'/');
setcookie($cookie_name,$name,time()+(86400*30),'/');
header("Location: ../home/");
?>
