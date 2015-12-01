<?php

$host = "localhost";
$db = "mpghs";
$user = "root";
$pass = "lumas";

$conn = mysql_connect($host,$user,$pass) or die("connection failed");

$conn_db = mysql_select_db($db) or die("Database not found");

$sql = "create table if not exists achivements (year varchar(6), examinee int(11), passed int(11), aplus int(11), gplus int (11), percent float, primary key(year))";
$create_table = mysql_query($sql) or die("table not created");
?>