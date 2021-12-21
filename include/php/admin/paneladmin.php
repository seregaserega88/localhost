<?php
    session_start();
	header ("Content-Type: text/html; charset=utf-8");

	if($_SESSION['adminka']=="ok")
	
	{
		echo('<form autocomplete="off" method="POST" action="save.php">');
echo ('<p>Login:<input type="text" name="login"></p><br>');	

echo('<p>Pasword:<input type="password" name="password"></p><br>');
echo('<input type="submit" value="OK">');
echo('</form>');
echo("<h2><a href='../exit.php'>ВЫХОД</a></h2>");
	}
	else
		header("Location:adminka.php");
echo("<h2><a href='../news/news.php'>ДОБАВИТЬ НОВОСТЬ</a></h2>");

?>