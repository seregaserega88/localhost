<?php
session_start();
header ("Content-Type: text/html; charset=utf-8"); //кодировка.
?>
<!DOCTYPE html>
<html lang="rus">
<head>
<meta charset="utf=8"> <!--кодировка -->
<link rel="STYLESHEET" href="css/format.css">
<title>Титул</title> <!-- название страницы-->
<link rel="icon" type="img/" href="icon.ico"> <!--Иконка страницы, размер: 16х16, 32х32 и 48х48 -->
<link rel="STYLESHEET" href="css/format.css"> <!--Подключениее файла css -->
<link rel="STYLESHEET" href="css/reset.css"> <!-- rese.css (сброс стандартных настроек браузера) -->
</head>
<body><!--кодировка -->
<div class="idRamka">

<h1>Сайт понятно с чем!</h1>


<h2>ВХОД/ВЫХОД</h2>

<?php
if($_SESSION['login_admin_check']=="ok"){
   echo("<h2><a href='PHP/exit.php'>ВЫХОД</a></h2>");


   }
else{
echo("<h2><a href='PHP/signin/log.php'>ВХОД</a></h2>");}


if($_SESSION['login_admin_check']!="ok"){
   echo("<h2><a href='php/login/reg.php'>Регистрация</a></h2>");

}
?>






</div id="idRamka">
</body>

</html>