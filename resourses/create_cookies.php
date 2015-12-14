<?php
$cookie_name = "user_email";
$cookie_value = $_GET['name'];
setcookie($cookie_name,$cookie_value,time()+(86400*30),'/');
header("Location: ../home/");
?>
