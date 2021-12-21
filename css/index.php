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
<link rel="icon"  href="image/iconka.ico"> <!--Иконка страницы, размер: 16х16, 32х32 и 48х48 -->
<link rel='stylesheet' href='css/forma.css'/>
</head>
<body><!--кодировка -->
<?php
echo date('l jS \of F Y h:i:s A');
?>
<div class="idRamka">

<h1>Сайт не понятно с чем!</h1>


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
</div class="idRamka">
<div id="news">

<?php
  $sql = mysqli_query($link, 'SELECT `id`, `title`, `avtor`, `infa` FROM `news`');
  while ($result = mysqli_fetch_array($sql)) {
  echo "<h1>{$result['title']} </h1>";
  echo "<p> {$result['infa']} </p>";
  echo "<p> {$result['avtor']} </p>";
  
}
?>
</div>




</body>

</html>