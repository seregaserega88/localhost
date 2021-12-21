<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "shpora");

header ("Content-Type: text/html; charset=utf-8"); //кодировка.
//include("../../include/mysql.php"); 


$sql = "CREATE TABLE IF NOT EXISTS `news` (
`id` INT(10) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(255) NOT NULL,
`avtor` TEXT NOT NULL,
`infa` TEXT NOT NULL,
PRIMARY KEY (`id`)
)";
mysqli_query($link,$sql);


$title   = $_POST['title'];
$avtor = $_POST['avtor'];
//$img  = $_POST['img'];
$infa  = $_POST['infa'];

$sql="INSERT INTO news (title, avtor, infa) VALUES ('$title', '$avtor', '$infa')";
$result=mysqli_query($link,$sql);

header("Location:../../index.php");
?>
