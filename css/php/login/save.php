<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "shpora");

$login=$_POST['login'];
$password=$_POST['password'];
$email=$_POST['email'];


$sql="INSERT INTO log_pass_email (login,password,email) VALUES ('$login','$password','$email')";
$result=mysqli_query($link,$sql);

header("Location:../../index.php")
?>
 