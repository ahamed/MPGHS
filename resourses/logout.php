<?php
session_start();
session_destroy();
setcookie('user_email','',time()-(86400*30),'/');
setcookie('user_name','',time()-(86400*30),'/');
header("Location: ../home/");

?>
