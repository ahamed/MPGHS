<?php

$host = "localhost";
$db = "mpghs";
$user = "root";
$pass = "lumas";

$conn = mysql_connect($host,$user,$pass) or die("connection failed");


$database = mysql_query("CREATE DATABASE IF NOT EXISTS mpghs") or die("Database not created");

$conn_db = mysql_select_db($db,$conn) or die("Database not found");

$sql = "create table if not exists achivements (year varchar(6), examinee int(11), passed int(11), aplus int(11), gplus int (11), percent float, primary key(year))";
$create_table = mysql_query($sql) or die("table not created");

$teacher = "create table if not exists teachers (name varchar(100), age int(11), speciality varchar(100),description varchar(1000),mobile varchar(100),
fbook varchar(100),email varchar(100),twitter varchar(100),image varchar(100), primary key(mobile,email))";

$crate_table_teachers = mysql_query($teacher) or die("could not create table");


$students = "CREATE TABLE IF NOT EXISTS students(id INT NOT NULL AUTO_INCREMENT, fname varchar(100), lname varchar(100), bdate DATE, sex varchar(10),blood varchar(5), mobile varchar(20), email varchar(200), password varchar(100),passing_year varchar(10), university varchar(100), job varchar(100), primary key(id,mobile,email))";

$create_table_student = mysql_query($students) or die("Student table not created");

?>
