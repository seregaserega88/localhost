<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "shpora");
 
header ("Content-Type: text/html; charset=utf-8"); //кодировка.
?>
<!DOCTYPE html>
<html lang="rus">
<head>
<meta charset="utf=8"> <!--кодировка -->
<title>Титул</title> <!-- название страницы-->
<link rel="icon" type="img/" href="icon.ico"> <!--Иконка страницы, размер: 16х16, 32х32 и 48х48 -->
<link rel="STYLESHEET" href="css/format.css"> <!--Подключениее файла css -->
<link rel="STYLESHEET" href="css/reset.css"> <!-- rese.css (сброс стандартных настроек браузера) -->
</head>
<?php
$sql = "CREATE TABLE IF NOT EXISTS `adminka` (
`id` INT(10) NOT NULL AUTO_INCREMENT,
`login` VARCHAR(255) NOT NULL,
`password` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`)
)";
mysqli_query($link,$sql);

  //$sql="INSERT INTO adminka (login,password) VALUES ('1','1')";
//$result=mysqli_query($link,$sql);

?>
<form autocomplete="off" method='POST' action="readadmin.php">
<p>Login:<input type="text" name="login"></p><br>
<p>Pasword:<input type="password" name="password"></p><br>
<input type="submit" value="Войти">
</form>