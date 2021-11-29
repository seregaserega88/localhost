<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "shpora");
 
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

<div id="news">
<?php
$sql = "CREATE TABLE IF NOT EXISTS `news` (
`id` INT(10) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(255) NOT NULL,
`text` TEXT NOT NULL,
PRIMARY KEY (`id`)
)";
mysqli_query($link,$sql);

  $news = file_get_contents("news.txt");
  $news = explode("\n", $news);
  for ($i = 0; $i < count($news); $i++) {
    $new = explode(";", $news[$i]);
    ?>
    <h1><?=$new[0]?></h1>
    <p><?=$new[1]?></p>
    <p><?=$new[2]?></p>
  <?php } ?>
  <?php
  if($_SESSION['login_admin_check']=="ok"){
  $sql="INSERT INTO news (title,text) VALUES ('1 новость','1 новость')";
$result=mysqli_query($link,$sql);
  $sql = mysqli_query($link, 'SELECT `id`, `title`, `text` FROM `news`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "<h1>{$result['title']}: {$result['text']} рублей</h1>";
  }}
?>
</div>




</div id="idRamka">
</body>

</html>