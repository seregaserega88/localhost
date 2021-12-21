<?php
session_start();
Header("Content-Type: text/html;charset=UTF-8");
$link = mysqli_connect("localhost", "root", "", "shpora");

?>
<form autocomplete="off" method='POST' action="read.php">
<p>Login:<input type="text" name="login"></p><br>
<p>Pasword:<input type="password" name="password"></p><br>
<input type="submit" value="Войти">
</form>
<a href="../../index.php">назад</a>