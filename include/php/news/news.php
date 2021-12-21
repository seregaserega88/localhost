<?php
//Header("Content-Type: text/html;charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="ru">
   <meta charset="UTF-8">
   <head>
      <title>Добавить Новость</title>
      <link rel="stylesheet" href="..css/reset.css">
      <link rel="stylesheet" href="../css/format.css">
   </head>
   <body>
   <div id="idLenta">
 




   
<?php 
?>
         <form action="save_news.php" method="post" ENCTYPE="multipart/form-data">
         Заголовок:<input type="text" name="title"><br><br>
         Автор:<input type="text" name="avtor"><br><br>
		 Описание:<textarea name="infa"></textarea><br><br>
         
         <input type="submit" name="submit" value="ok">
         </form>
<?php 
?>         
      </div>
   </body>
</html>