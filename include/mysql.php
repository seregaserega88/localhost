<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="shpora";
$connect_db=mysql_connect($db_host,$db_user,$db_pass) or die("Ошибка подключения к серверу:" . mysql_error());
mysql_select_db($db_name,$connect_db) or die("Ошибка подключения к БД:" . mysql_error());
?>