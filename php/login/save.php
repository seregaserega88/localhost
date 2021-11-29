<?php
session_start();
include("../../include/mysql.php"); 

$login=$_POST['login'];
$password=$_POST['password'];
$email=$_POST['email'];


$sql="INSERT INTO log_pass_email (login,password,email) VALUES ('$login','$password','$email')";
$result=mysql_query($sql);

header("Location:../../index.php")
?>
 